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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Draco 设备预录入信息
 *
 * @method string getSN() 获取设备SN。SN仅支持大写字母、数字，长度限制为1~32个字符
 * @method void setSN(string $SN) 设置设备SN。SN仅支持大写字母、数字，长度限制为1~32个字符
 * @method string getName() 获取节点名称。长度限制为1~63个字符，节点名称只支持小写英文、数字、中横线、英文句号
 * @method void setName(string $Name) 设置节点名称。长度限制为1~63个字符，节点名称只支持小写英文、数字、中横线、英文句号
 * @method string getRemark() 获取节点备注
 * @method void setRemark(string $Remark) 设置节点备注
 */
class DracoNodeInfo extends AbstractModel
{
    /**
     * @var string 设备SN。SN仅支持大写字母、数字，长度限制为1~32个字符
     */
    public $SN;

    /**
     * @var string 节点名称。长度限制为1~63个字符，节点名称只支持小写英文、数字、中横线、英文句号
     */
    public $Name;

    /**
     * @var string 节点备注
     */
    public $Remark;

    /**
     * @param string $SN 设备SN。SN仅支持大写字母、数字，长度限制为1~32个字符
     * @param string $Name 节点名称。长度限制为1~63个字符，节点名称只支持小写英文、数字、中横线、英文句号
     * @param string $Remark 节点备注
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
        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
