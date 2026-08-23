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
 * AIAgent 资产凭据详情
 *
 * @method integer getID() 获取<p>凭据 ID</p>
 * @method void setID(integer $ID) 设置<p>凭据 ID</p>
 * @method string getCredName() 获取<p>凭据名称</p>
 * @method void setCredName(string $CredName) 设置<p>凭据名称</p>
 * @method string getCredType() 获取<p>凭据类型</p><p>枚举值：</p><ul><li>OAUTH： oauth 类型凭据</li><li>API_TOKEN： token 类型凭据</li><li>CLOUD_AK： aksk 类型凭据</li></ul>
 * @method void setCredType(string $CredType) 设置<p>凭据类型</p><p>枚举值：</p><ul><li>OAUTH： oauth 类型凭据</li><li>API_TOKEN： token 类型凭据</li><li>CLOUD_AK： aksk 类型凭据</li></ul>
 * @method array getLocations() 获取<p>凭据所在位置标识</p>
 * @method void setLocations(array $Locations) 设置<p>凭据所在位置标识</p>
 * @method string getDetectTime() 获取<p>最近扫描发现时间</p>
 * @method void setDetectTime(string $DetectTime) 设置<p>最近扫描发现时间</p>
 * @method integer getHitCount() 获取<p>该凭据的泄露位置总数</p>
 * @method void setHitCount(integer $HitCount) 设置<p>该凭据的泄露位置总数</p>
 */
class AIAgentCredential extends AbstractModel
{
    /**
     * @var integer <p>凭据 ID</p>
     */
    public $ID;

    /**
     * @var string <p>凭据名称</p>
     */
    public $CredName;

    /**
     * @var string <p>凭据类型</p><p>枚举值：</p><ul><li>OAUTH： oauth 类型凭据</li><li>API_TOKEN： token 类型凭据</li><li>CLOUD_AK： aksk 类型凭据</li></ul>
     */
    public $CredType;

    /**
     * @var array <p>凭据所在位置标识</p>
     */
    public $Locations;

    /**
     * @var string <p>最近扫描发现时间</p>
     */
    public $DetectTime;

    /**
     * @var integer <p>该凭据的泄露位置总数</p>
     */
    public $HitCount;

    /**
     * @param integer $ID <p>凭据 ID</p>
     * @param string $CredName <p>凭据名称</p>
     * @param string $CredType <p>凭据类型</p><p>枚举值：</p><ul><li>OAUTH： oauth 类型凭据</li><li>API_TOKEN： token 类型凭据</li><li>CLOUD_AK： aksk 类型凭据</li></ul>
     * @param array $Locations <p>凭据所在位置标识</p>
     * @param string $DetectTime <p>最近扫描发现时间</p>
     * @param integer $HitCount <p>该凭据的泄露位置总数</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("CredName",$param) and $param["CredName"] !== null) {
            $this->CredName = $param["CredName"];
        }

        if (array_key_exists("CredType",$param) and $param["CredType"] !== null) {
            $this->CredType = $param["CredType"];
        }

        if (array_key_exists("Locations",$param) and $param["Locations"] !== null) {
            $this->Locations = [];
            foreach ($param["Locations"] as $key => $value){
                $obj = new AIAgentCredentialLocation();
                $obj->deserialize($value);
                array_push($this->Locations, $obj);
            }
        }

        if (array_key_exists("DetectTime",$param) and $param["DetectTime"] !== null) {
            $this->DetectTime = $param["DetectTime"];
        }

        if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
            $this->HitCount = $param["HitCount"];
        }
    }
}
