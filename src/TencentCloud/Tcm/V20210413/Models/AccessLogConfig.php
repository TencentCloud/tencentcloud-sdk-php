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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AccessLog 配置
 *
 * @method boolean getEnable() 获取是否启用
 * @method void setEnable(boolean $Enable) 设置是否启用
 * @method string getTemplate() 获取采用的模板，可选值：istio（默认）、trace
 * @method void setTemplate(string $Template) 设置采用的模板，可选值：istio（默认）、trace
 * @method SelectedRange getSelectedRange() 获取选中的范围
 * @method void setSelectedRange(SelectedRange $SelectedRange) 设置选中的范围
 * @method CLS getCLS() 获取腾讯云日志服务相关参数
 * @method void setCLS(CLS $CLS) 设置腾讯云日志服务相关参数
 */
class AccessLogConfig extends AbstractModel
{
    /**
     * @var boolean 是否启用
     */
    public $Enable;

    /**
     * @var string 采用的模板，可选值：istio（默认）、trace
     */
    public $Template;

    /**
     * @var SelectedRange 选中的范围
     */
    public $SelectedRange;

    /**
     * @var CLS 腾讯云日志服务相关参数
     */
    public $CLS;

    /**
     * @param boolean $Enable 是否启用
     * @param string $Template 采用的模板，可选值：istio（默认）、trace
     * @param SelectedRange $SelectedRange 选中的范围
     * @param CLS $CLS 腾讯云日志服务相关参数
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("SelectedRange",$param) and $param["SelectedRange"] !== null) {
            $this->SelectedRange = new SelectedRange();
            $this->SelectedRange->deserialize($param["SelectedRange"]);
        }

        if (array_key_exists("CLS",$param) and $param["CLS"] !== null) {
            $this->CLS = new CLS();
            $this->CLS->deserialize($param["CLS"]);
        }
    }
}
