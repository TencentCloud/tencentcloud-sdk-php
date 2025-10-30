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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCityWorkspaceList请求参数结构体
 *
 * @method array getAdministrativeCodeSet() 获取行政区编码集合
 * @method void setAdministrativeCodeSet(array $AdministrativeCodeSet) 设置行政区编码集合
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 */
class DescribeCityWorkspaceListRequest extends AbstractModel
{
    /**
     * @var array 行政区编码集合
     */
    public $AdministrativeCodeSet;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @param array $AdministrativeCodeSet 行政区编码集合
     * @param string $ApplicationToken 应用token
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
        if (array_key_exists("AdministrativeCodeSet",$param) and $param["AdministrativeCodeSet"] !== null) {
            $this->AdministrativeCodeSet = $param["AdministrativeCodeSet"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }
    }
}
