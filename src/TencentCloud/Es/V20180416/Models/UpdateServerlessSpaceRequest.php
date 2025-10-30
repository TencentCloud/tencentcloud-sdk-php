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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServerlessSpace请求参数结构体
 *
 * @method string getSpaceId() 获取Serveless索引空间ID
 * @method void setSpaceId(string $SpaceId) 设置Serveless索引空间ID
 * @method string getSpaceName() 获取Serveless索引空间名
 * @method void setSpaceName(string $SpaceName) 设置Serveless索引空间名
 * @method string getKibanaPrivateAccess() 获取kibana内网开关
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置kibana内网开关
 * @method string getKibanaPublicAccess() 获取kibana公网开关
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置kibana公网开关
 * @method EsAcl getKibanaPublicAcl() 获取kibana公网白名单
 * @method void setKibanaPublicAcl(EsAcl $KibanaPublicAcl) 设置kibana公网白名单
 */
class UpdateServerlessSpaceRequest extends AbstractModel
{
    /**
     * @var string Serveless索引空间ID
     */
    public $SpaceId;

    /**
     * @var string Serveless索引空间名
     */
    public $SpaceName;

    /**
     * @var string kibana内网开关
     */
    public $KibanaPrivateAccess;

    /**
     * @var string kibana公网开关
     */
    public $KibanaPublicAccess;

    /**
     * @var EsAcl kibana公网白名单
     */
    public $KibanaPublicAcl;

    /**
     * @param string $SpaceId Serveless索引空间ID
     * @param string $SpaceName Serveless索引空间名
     * @param string $KibanaPrivateAccess kibana内网开关
     * @param string $KibanaPublicAccess kibana公网开关
     * @param EsAcl $KibanaPublicAcl kibana公网白名单
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPublicAcl",$param) and $param["KibanaPublicAcl"] !== null) {
            $this->KibanaPublicAcl = new EsAcl();
            $this->KibanaPublicAcl->deserialize($param["KibanaPublicAcl"]);
        }
    }
}
