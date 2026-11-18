<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC 白名单列表配置
 *
 * @method string getAction() 获取<p>VPC 白名单配置状态</p><p>枚举值：</p><ul><li>OPEN： 开启白名单，VPCs 必填，覆盖写入</li><li>CLOSE： 关闭白名单，VPCs 填入时，覆盖写入</li></ul>
 * @method void setAction(string $Action) 设置<p>VPC 白名单配置状态</p><p>枚举值：</p><ul><li>OPEN： 开启白名单，VPCs 必填，覆盖写入</li><li>CLOSE： 关闭白名单，VPCs 填入时，覆盖写入</li></ul>
 * @method array getVPCs() 获取<p>VPC 信息</p>
 * @method void setVPCs(array $VPCs) 设置<p>VPC 信息</p>
 */
class VPCWhiteListConfig extends AbstractModel
{
    /**
     * @var string <p>VPC 白名单配置状态</p><p>枚举值：</p><ul><li>OPEN： 开启白名单，VPCs 必填，覆盖写入</li><li>CLOSE： 关闭白名单，VPCs 填入时，覆盖写入</li></ul>
     */
    public $Action;

    /**
     * @var array <p>VPC 信息</p>
     */
    public $VPCs;

    /**
     * @param string $Action <p>VPC 白名单配置状态</p><p>枚举值：</p><ul><li>OPEN： 开启白名单，VPCs 必填，覆盖写入</li><li>CLOSE： 关闭白名单，VPCs 填入时，覆盖写入</li></ul>
     * @param array $VPCs <p>VPC 信息</p>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("VPCs",$param) and $param["VPCs"] !== null) {
            $this->VPCs = [];
            foreach ($param["VPCs"] as $key => $value){
                $obj = new VPCInfo();
                $obj->deserialize($value);
                array_push($this->VPCs, $obj);
            }
        }
    }
}
