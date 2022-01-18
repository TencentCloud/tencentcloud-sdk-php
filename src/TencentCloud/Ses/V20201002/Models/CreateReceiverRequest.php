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
 * CreateReceiver请求参数结构体
 *
 * @method string getReceiversName() 获取收件人列表名称
 * @method void setReceiversName(string $ReceiversName) 设置收件人列表名称
 * @method string getDesc() 获取收件人列表描述
 * @method void setDesc(string $Desc) 设置收件人列表描述
 */
class CreateReceiverRequest extends AbstractModel
{
    /**
     * @var string 收件人列表名称
     */
    public $ReceiversName;

    /**
     * @var string 收件人列表描述
     */
    public $Desc;

    /**
     * @param string $ReceiversName 收件人列表名称
     * @param string $Desc 收件人列表描述
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
        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
