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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryDSPAMetaResourceDbList请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getResourceId() 获取数据库实例ID。
 * @method void setResourceId(string $ResourceId) 设置数据库实例ID。
 * @method string getResourceRegion() 获取数据库实例所在地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置数据库实例所在地域。
 * @method string getMetaType() 获取数据库实例类型。
 * @method void setMetaType(string $MetaType) 设置数据库实例类型。
 */
class QueryDSPAMetaResourceDbListRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 数据库实例ID。
     */
    public $ResourceId;

    /**
     * @var string 数据库实例所在地域。
     */
    public $ResourceRegion;

    /**
     * @var string 数据库实例类型。
     */
    public $MetaType;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $ResourceId 数据库实例ID。
     * @param string $ResourceRegion 数据库实例所在地域。
     * @param string $MetaType 数据库实例类型。
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }
    }
}
