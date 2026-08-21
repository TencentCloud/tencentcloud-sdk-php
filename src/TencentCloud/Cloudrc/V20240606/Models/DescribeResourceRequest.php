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
namespace TencentCloud\Cloudrc\V20240606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResource请求参数结构体
 *
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method string getRegionCode() 获取<p>地域编码</p>
 * @method void setRegionCode(string $RegionCode) 设置<p>地域编码</p>
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method string getViewId() 获取<p>视图ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图ID</p>
 */
class DescribeResourceRequest extends AbstractModel
{
    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>地域编码</p>
     */
    public $RegionCode;

    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>视图ID</p>
     */
    public $ViewId;

    /**
     * @param string $ResourceType <p>资源类型</p>
     * @param string $RegionCode <p>地域编码</p>
     * @param string $ResourceId <p>资源ID</p>
     * @param string $ViewId <p>视图ID</p>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }
    }
}
