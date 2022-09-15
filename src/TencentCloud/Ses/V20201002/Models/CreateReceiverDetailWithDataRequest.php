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
 * CreateReceiverDetailWithData请求参数结构体
 *
 * @method integer getReceiverId() 获取收件人列表ID
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表ID
 * @method array getDatas() 获取收信人邮箱以及模板参数，数组形式。收件人个数限制20000个以内。
 * @method void setDatas(array $Datas) 设置收信人邮箱以及模板参数，数组形式。收件人个数限制20000个以内。
 */
class CreateReceiverDetailWithDataRequest extends AbstractModel
{
    /**
     * @var integer 收件人列表ID
     */
    public $ReceiverId;

    /**
     * @var array 收信人邮箱以及模板参数，数组形式。收件人个数限制20000个以内。
     */
    public $Datas;

    /**
     * @param integer $ReceiverId 收件人列表ID
     * @param array $Datas 收信人邮箱以及模板参数，数组形式。收件人个数限制20000个以内。
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

        if (array_key_exists("Datas",$param) and $param["Datas"] !== null) {
            $this->Datas = [];
            foreach ($param["Datas"] as $key => $value){
                $obj = new ReceiverInputData();
                $obj->deserialize($value);
                array_push($this->Datas, $obj);
            }
        }
    }
}
