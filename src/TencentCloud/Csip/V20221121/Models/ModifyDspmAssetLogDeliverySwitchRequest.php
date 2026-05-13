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
 * ModifyDspmAssetLogDeliverySwitch请求参数结构体
 *
 * @method string getAssetId() 获取实例id
 * @method void setAssetId(string $AssetId) 设置实例id
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method integer getEnable() 获取开关。1-打开 0-关闭
 * @method void setEnable(integer $Enable) 设置开关。1-打开 0-关闭
 */
class ModifyDspmAssetLogDeliverySwitchRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $AssetId;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var integer 开关。1-打开 0-关闭
     */
    public $Enable;

    /**
     * @param string $AssetId 实例id
     * @param array $MemberId 集团账号的成员id
     * @param integer $Enable 开关。1-打开 0-关闭
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
