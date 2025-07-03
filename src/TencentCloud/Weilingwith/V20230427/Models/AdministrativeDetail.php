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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行政区划详情
 *
 * @method string getAdministrativeTypeCode() 获取行政区域类型编码
 * @method void setAdministrativeTypeCode(string $AdministrativeTypeCode) 设置行政区域类型编码
 * @method string getAdministrativeCode() 获取行政区域编码
 * @method void setAdministrativeCode(string $AdministrativeCode) 设置行政区域编码
 * @method string getAdministrativeName() 获取行政区域名称
 * @method void setAdministrativeName(string $AdministrativeName) 设置行政区域名称
 */
class AdministrativeDetail extends AbstractModel
{
    /**
     * @var string 行政区域类型编码
     */
    public $AdministrativeTypeCode;

    /**
     * @var string 行政区域编码
     */
    public $AdministrativeCode;

    /**
     * @var string 行政区域名称
     */
    public $AdministrativeName;

    /**
     * @param string $AdministrativeTypeCode 行政区域类型编码
     * @param string $AdministrativeCode 行政区域编码
     * @param string $AdministrativeName 行政区域名称
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
        if (array_key_exists("AdministrativeTypeCode",$param) and $param["AdministrativeTypeCode"] !== null) {
            $this->AdministrativeTypeCode = $param["AdministrativeTypeCode"];
        }

        if (array_key_exists("AdministrativeCode",$param) and $param["AdministrativeCode"] !== null) {
            $this->AdministrativeCode = $param["AdministrativeCode"];
        }

        if (array_key_exists("AdministrativeName",$param) and $param["AdministrativeName"] !== null) {
            $this->AdministrativeName = $param["AdministrativeName"];
        }
    }
}
