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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API分组日使用统计对象数据点
 *
 * @method string getApiPath() 获取API 路径
 * @method void setApiPath(string $ApiPath) 设置API 路径
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method string getValue() 获取统计值
 * @method void setValue(string $Value) 设置统计值
 * @method string getApiId() 获取API ID
 * @method void setApiId(string $ApiId) 设置API ID
 */
class GroupUseStatisticsEntity extends AbstractModel
{
    /**
     * @var string API 路径
     */
    public $ApiPath;

    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var string 统计值
     */
    public $Value;

    /**
     * @var string API ID
     */
    public $ApiId;

    /**
     * @param string $ApiPath API 路径
     * @param string $ServiceName 服务名
     * @param string $Value 统计值
     * @param string $ApiId API ID
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
        if (array_key_exists("ApiPath",$param) and $param["ApiPath"] !== null) {
            $this->ApiPath = $param["ApiPath"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }
    }
}
