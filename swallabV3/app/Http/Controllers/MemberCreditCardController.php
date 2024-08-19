<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberCreditCard;
use Illuminate\Support\Facades\Auth;

class MemberCreditCardController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'credit_card_number' => 'required|string|max:19',
                'expiry_date' => 'required|string|max:5',
                'security_code' => 'required|string|max:3',
                'cardholder_name' => 'required|string|max:255',
            ]);

            // 获取会员 ID
            $memberId = auth()->user()->member->id;

            // 组合信用卡信息
            $creditCardInfo = $validatedData['credit_card_number'] . '|' .
                $validatedData['expiry_date'] . '|' .
                $validatedData['security_code'] . '|' .
                $validatedData['cardholder_name'];

            // 保存到数据库
            MemberCreditCard::create([
                'm_id' => $memberId,
                'infos' => $creditCardInfo,
            ]);

            return response()->json(['success' => '信用卡信息已保存成功！']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
