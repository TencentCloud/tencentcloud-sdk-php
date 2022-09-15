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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书查询过滤条件
 *
 * @method string getName() 获取过滤字段名，支持的列表如下:
 - host：域名。
 - certId: 证书ID
 - certAlias: 证书备用名
 - certType: default: 默认证书, upload: 上传证书, managed:腾讯云证书
 * @method void setName(string $Name) 设置过滤字段名，支持的列表如下:
 - host：域名。
 - certId: 证书ID
 - certAlias: 证书备用名
 - certType: default: 默认证书, upload: 上传证书, managed:腾讯云证书
 * @method array getValues() 获取过滤字段值
 * @method void setValues(array $Values) 设置过滤字段值
 * @method boolean getFuzzy() 获取是否启用模糊查询，仅支持过滤字段名host。
模糊查询时，Value长度最大为1。
 * @method void setFuzzy(boolean $Fuzzy) 设置是否启用模糊查询，仅支持过滤字段名host。
模糊查询时，Value长度最大为1。
 */
class CertFilter extends AbstractModel
{
    /**
     * @var string 过滤字段名，支持的列表如下:
 - host：域名。
 - certId: 证书ID
 - certAlias: 证书备用名
 - certType: default: 默认证书, upload: 上传证书, managed:腾讯云证书
     */
    public $Name;

    /**
     * @var array 过滤字段值
     */
    public $Values;

    /**
     * @var boolean 是否启用模糊查询，仅支持过滤字段名host。
模糊查询时，Value长度最大为1。
     */
    public $Fuzzy;

    /**
     * @param string $Name 过滤字段名，支持的列表如下:
 - host：域名。
 - certId: 证书ID
 - certAlias: 证书备用名
 - certType: default: 默认证书, upload: 上传证书, managed:腾讯云证书
     * @param array $Values 过滤字段值
     * @param boolean $Fuzzy 是否启用模糊查询，仅支持过滤字段名host。
模糊查询时，Value长度最大为1。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
