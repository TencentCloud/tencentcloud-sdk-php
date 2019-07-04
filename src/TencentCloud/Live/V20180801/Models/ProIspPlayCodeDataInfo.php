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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProvinceName() 获取省份。
 * @method void setProvinceName(string $ProvinceName) 设置省份。
 * @method string getIspName() 获取运营商。
 * @method void setIspName(string $IspName) 设置运营商。
 * @method integer getCode4xx() 获取错误码为4开头的次数。
 * @method void setCode4xx(integer $Code4xx) 设置错误码为4开头的次数。
 * @method integer getCode5xx() 获取错误码为5开头的次数。
 * @method void setCode5xx(integer $Code5xx) 设置错误码为5开头的次数。
 */

/**
 *播放错误码信息
 */
class ProIspPlayCodeDataInfo extends AbstractModel
{
    /**
     * @var string 省份。
     */
    public $ProvinceName;

    /**
     * @var string 运营商。
     */
    public $IspName;

    /**
     * @var integer 错误码为4开头的次数。
     */
    public $Code4xx;

    /**
     * @var integer 错误码为5开头的次数。
     */
    public $Code5xx;
    /**
     * @param string $ProvinceName 省份。
     * @param string $IspName 运营商。
     * @param integer $Code4xx 错误码为4开头的次数。
     * @param integer $Code5xx 错误码为5开头的次数。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("Code4xx",$param) and $param["Code4xx"] !== null) {
            $this->Code4xx = $param["Code4xx"];
        }

        if (array_key_exists("Code5xx",$param) and $param["Code5xx"] !== null) {
            $this->Code5xx = $param["Code5xx"];
        }
    }
}
