<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListReceiverDetails请求参数结构体
 *
 * @method integer getReceiverId() 获取收件人列表ID,CreateReceiver接口创建收件人列表时会返回该值
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表ID,CreateReceiver接口创建收件人列表时会返回该值
 * @method integer getOffset() 获取偏移量，整型，从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，整型，从0开始
 * @method integer getLimit() 获取限制数目，整型,不超过100
 * @method void setLimit(integer $Limit) 设置限制数目，整型,不超过100
 * @method string getEmail() 获取收件人地址，长度0-50，示例：xxx@te.com，支持模糊查询
 * @method void setEmail(string $Email) 设置收件人地址，长度0-50，示例：xxx@te.com，支持模糊查询
 */
class ListReceiverDetailsRequest extends AbstractModel
{
    /**
     * @var integer 收件人列表ID,CreateReceiver接口创建收件人列表时会返回该值
     */
    public $ReceiverId;

    /**
     * @var integer 偏移量，整型，从0开始
     */
    public $Offset;

    /**
     * @var integer 限制数目，整型,不超过100
     */
    public $Limit;

    /**
     * @var string 收件人地址，长度0-50，示例：xxx@te.com，支持模糊查询
     */
    public $Email;

    /**
     * @param integer $ReceiverId 收件人列表ID,CreateReceiver接口创建收件人列表时会返回该值
     * @param integer $Offset 偏移量，整型，从0开始
     * @param integer $Limit 限制数目，整型,不超过100
     * @param string $Email 收件人地址，长度0-50，示例：xxx@te.com，支持模糊查询
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
