<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function edit($id)
    {
        // 根據 user_id 獲取對應的 Member 模型實例
        $member = Member::where('user_id', $id)->firstOrFail();

        // 將 $member 傳遞給視圖
        return view('profile.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::where('user_id', $id)->firstOrFail();

        // 驗證輸入數據
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'instagram' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'threads' => 'nullable|url|max:255',
        ]);

        // 如果上傳了新頭像，處理並保存
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        // 更新會員資料，包括社群連結
        $member->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'bio' => $data['bio'],
            'avatar' => $data['avatar'] ?? $member->avatar, // 保留現有頭像
            'ig_link' => $data['instagram'],
            'fb_link' => $data['facebook'],
            'threads_link' => $data['threads'],
        ]);

        return redirect()->route('profile.show', $id)->with('success', '個人檔案更新成功。');
    }
}
