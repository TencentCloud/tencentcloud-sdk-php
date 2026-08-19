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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClbTargets请求参数结构体
 *
 * @method string getAssetID() 获取<p>资产ID</p>
 * @method void setAssetID(string $AssetID) 设置<p>资产ID</p>
 * @method string getTargetType() 获取<p>目标类型</p><p>枚举值：</p><ul><li>listener： 监听器</li><li>rule： 七层规则</li></ul>
 * @method void setTargetType(string $TargetType) 设置<p>目标类型</p><p>枚举值：</p><ul><li>listener： 监听器</li><li>rule： 七层规则</li></ul>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class DescribeClbTargetsRequest extends AbstractModel
{
    /**
     * @var string <p>资产ID</p>
     */
    public $AssetID;

    /**
     * @var string <p>目标类型</p><p>枚举值：</p><ul><li>listener： 监听器</li><li>rule： 七层规则</li></ul>
     */
    public $TargetType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param string $AssetID <p>资产ID</p>
     * @param string $TargetType <p>目标类型</p><p>枚举值：</p><ul><li>listener： 监听器</li><li>rule： 七层规则</li></ul>
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
