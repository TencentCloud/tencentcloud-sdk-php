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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetTDidAttribute请求参数结构体
 *
 * @method string getDid() 获取DID标识符
 * @method void setDid(string $Did) 设置DID标识符
 * @method array getAttributes() 获取属性名值对数组
 * @method void setAttributes(array $Attributes) 设置属性名值对数组
 * @method integer getDAPId() 获取DID应用Id
 * @method void setDAPId(integer $DAPId) 设置DID应用Id
 * @method string getOperateCredential() 获取操作鉴权凭证
 * @method void setOperateCredential(string $OperateCredential) 设置操作鉴权凭证
 */
class SetTDidAttributeRequest extends AbstractModel
{
    /**
     * @var string DID标识符
     */
    public $Did;

    /**
     * @var array 属性名值对数组
     */
    public $Attributes;

    /**
     * @var integer DID应用Id
     */
    public $DAPId;

    /**
     * @var string 操作鉴权凭证
     */
    public $OperateCredential;

    /**
     * @param string $Did DID标识符
     * @param array $Attributes 属性名值对数组
     * @param integer $DAPId DID应用Id
     * @param string $OperateCredential 操作鉴权凭证
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new DidAttribute();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("OperateCredential",$param) and $param["OperateCredential"] !== null) {
            $this->OperateCredential = $param["OperateCredential"];
        }
    }
}
