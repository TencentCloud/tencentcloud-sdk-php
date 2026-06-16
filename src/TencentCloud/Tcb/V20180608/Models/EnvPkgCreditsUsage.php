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
 * 模块内资源点用量及原始用量数据结构
 *
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 * @method string getModule() 获取<p>模块</p>
 * @method void setModule(string $Module) 设置<p>模块</p>
 * @method float getCreditsValue() 获取<p>module总资源点用量</p>
 * @method void setCreditsValue(float $CreditsValue) 设置<p>module总资源点用量</p>
 * @method array getMetricUsageDetail() 获取<p>指标用量明细</p>
 * @method void setMetricUsageDetail(array $MetricUsageDetail) 设置<p>指标用量明细</p>
 * @method float getDeductValue() 获取<p>资源点套餐内用量</p>
 * @method void setDeductValue(float $DeductValue) 设置<p>资源点套餐内用量</p>
 * @method float getPackageDeductValue() 获取<p>资源点资源包用量</p>
 * @method void setPackageDeductValue(float $PackageDeductValue) 设置<p>资源点资源包用量</p>
 * @method float getReportValue() 获取<p>资源点按量用量</p>
 * @method void setReportValue(float $ReportValue) 设置<p>资源点按量用量</p>
 */
class EnvPkgCreditsUsage extends AbstractModel
{
    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @var string <p>模块</p>
     */
    public $Module;

    /**
     * @var float <p>module总资源点用量</p>
     */
    public $CreditsValue;

    /**
     * @var array <p>指标用量明细</p>
     */
    public $MetricUsageDetail;

    /**
     * @var float <p>资源点套餐内用量</p>
     */
    public $DeductValue;

    /**
     * @var float <p>资源点资源包用量</p>
     */
    public $PackageDeductValue;

    /**
     * @var float <p>资源点按量用量</p>
     */
    public $ReportValue;

    /**
     * @param string $EnvId <p>环境id</p>
     * @param string $Module <p>模块</p>
     * @param float $CreditsValue <p>module总资源点用量</p>
     * @param array $MetricUsageDetail <p>指标用量明细</p>
     * @param float $DeductValue <p>资源点套餐内用量</p>
     * @param float $PackageDeductValue <p>资源点资源包用量</p>
     * @param float $ReportValue <p>资源点按量用量</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("CreditsValue",$param) and $param["CreditsValue"] !== null) {
            $this->CreditsValue = $param["CreditsValue"];
        }

        if (array_key_exists("MetricUsageDetail",$param) and $param["MetricUsageDetail"] !== null) {
            $this->MetricUsageDetail = [];
            foreach ($param["MetricUsageDetail"] as $key => $value){
                $obj = new MetricUsage();
                $obj->deserialize($value);
                array_push($this->MetricUsageDetail, $obj);
            }
        }

        if (array_key_exists("DeductValue",$param) and $param["DeductValue"] !== null) {
            $this->DeductValue = $param["DeductValue"];
        }

        if (array_key_exists("PackageDeductValue",$param) and $param["PackageDeductValue"] !== null) {
            $this->PackageDeductValue = $param["PackageDeductValue"];
        }

        if (array_key_exists("ReportValue",$param) and $param["ReportValue"] !== null) {
            $this->ReportValue = $param["ReportValue"];
        }
    }
}
