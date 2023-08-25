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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS资源的桶信息
 *
 * @method string getResourceId() 获取cos数据源ID。
 * @method void setResourceId(string $ResourceId) 设置cos数据源ID。
 * @method string getResourceRegion() 获取桶所在地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置桶所在地域。
 * @method string getResourceName() 获取桶名称。
 * @method void setResourceName(string $ResourceName) 设置桶名称。
 */
class CosResourceItem extends AbstractModel
{
    /**
     * @var string cos数据源ID。
     */
    public $ResourceId;

    /**
     * @var string 桶所在地域。
     */
    public $ResourceRegion;

    /**
     * @var string 桶名称。
     */
    public $ResourceName;

    /**
     * @param string $ResourceId cos数据源ID。
     * @param string $ResourceRegion 桶所在地域。
     * @param string $ResourceName 桶名称。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
