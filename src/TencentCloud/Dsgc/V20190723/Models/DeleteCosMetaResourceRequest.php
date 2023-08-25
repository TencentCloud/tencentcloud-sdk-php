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
 * DeleteCosMetaResource请求参数结构体
 *
 * @method string getDspaId() 获取实例Id。
 * @method void setDspaId(string $DspaId) 设置实例Id。
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method array getResourceIds() 获取资源实例ID。
 * @method void setResourceIds(array $ResourceIds) 设置资源实例ID。
 */
class DeleteCosMetaResourceRequest extends AbstractModel
{
    /**
     * @var string 实例Id。
     */
    public $DspaId;

    /**
     * @var string 资源所处地域。
     */
    public $ResourceRegion;

    /**
     * @var array 资源实例ID。
     */
    public $ResourceIds;

    /**
     * @param string $DspaId 实例Id。
     * @param string $ResourceRegion 资源所处地域。
     * @param array $ResourceIds 资源实例ID。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
