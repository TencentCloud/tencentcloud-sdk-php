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
 * ModifyDspmAssetSecurityAnalysisSwitch请求参数结构体
 *
 * @method array getInstances() 获取实例信息
 * @method void setInstances(array $Instances) 设置实例信息
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method integer getEnable() 获取开关。1-打开 0-关闭
 * @method void setEnable(integer $Enable) 设置开关。1-打开 0-关闭
 */
class ModifyDspmAssetSecurityAnalysisSwitchRequest extends AbstractModel
{
    /**
     * @var array 实例信息
     */
    public $Instances;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var integer 开关。1-打开 0-关闭
     */
    public $Enable;

    /**
     * @param array $Instances 实例信息
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
        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new DspmAssetInstance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
