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
 * 漏洞信息产品支持状态
 *
 * @method boolean getVSSScan() 获取true支持扫描。false不支持扫描
 * @method void setVSSScan(boolean $VSSScan) 设置true支持扫描。false不支持扫描
 * @method string getCWPScan() 获取0不支持，1支持
 * @method void setCWPScan(string $CWPScan) 设置0不支持，1支持
 * @method string getCFWPatch() 获取1支持虚拟补丁，0或空不支持
 * @method void setCFWPatch(string $CFWPatch) 设置1支持虚拟补丁，0或空不支持
 * @method integer getWafPatch() 获取0不支持，1支持	
 * @method void setWafPatch(integer $WafPatch) 设置0不支持，1支持	
 * @method integer getCWPFix() 获取0不支持，1支持	
 * @method void setCWPFix(integer $CWPFix) 设置0不支持，1支持	
 * @method string getCveId() 获取cveid
 * @method void setCveId(string $CveId) 设置cveid
 */
class ProductSupport extends AbstractModel
{
    /**
     * @var boolean true支持扫描。false不支持扫描
     */
    public $VSSScan;

    /**
     * @var string 0不支持，1支持
     */
    public $CWPScan;

    /**
     * @var string 1支持虚拟补丁，0或空不支持
     */
    public $CFWPatch;

    /**
     * @var integer 0不支持，1支持	
     */
    public $WafPatch;

    /**
     * @var integer 0不支持，1支持	
     */
    public $CWPFix;

    /**
     * @var string cveid
     */
    public $CveId;

    /**
     * @param boolean $VSSScan true支持扫描。false不支持扫描
     * @param string $CWPScan 0不支持，1支持
     * @param string $CFWPatch 1支持虚拟补丁，0或空不支持
     * @param integer $WafPatch 0不支持，1支持	
     * @param integer $CWPFix 0不支持，1支持	
     * @param string $CveId cveid
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
        if (array_key_exists("VSSScan",$param) and $param["VSSScan"] !== null) {
            $this->VSSScan = $param["VSSScan"];
        }

        if (array_key_exists("CWPScan",$param) and $param["CWPScan"] !== null) {
            $this->CWPScan = $param["CWPScan"];
        }

        if (array_key_exists("CFWPatch",$param) and $param["CFWPatch"] !== null) {
            $this->CFWPatch = $param["CFWPatch"];
        }

        if (array_key_exists("WafPatch",$param) and $param["WafPatch"] !== null) {
            $this->WafPatch = $param["WafPatch"];
        }

        if (array_key_exists("CWPFix",$param) and $param["CWPFix"] !== null) {
            $this->CWPFix = $param["CWPFix"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }
    }
}
