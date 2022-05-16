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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDedicatedCluster请求参数结构体
 *
 * @method string getSiteId() 获取专用集群所属的SiteId
 * @method void setSiteId(string $SiteId) 设置专用集群所属的SiteId
 * @method string getName() 获取专用集群的名称
 * @method void setName(string $Name) 设置专用集群的名称
 * @method string getZone() 获取专用集群所属的可用区
 * @method void setZone(string $Zone) 设置专用集群所属的可用区
 * @method string getDescription() 获取专用集群的描述
 * @method void setDescription(string $Description) 设置专用集群的描述
 */
class CreateDedicatedClusterRequest extends AbstractModel
{
    /**
     * @var string 专用集群所属的SiteId
     */
    public $SiteId;

    /**
     * @var string 专用集群的名称
     */
    public $Name;

    /**
     * @var string 专用集群所属的可用区
     */
    public $Zone;

    /**
     * @var string 专用集群的描述
     */
    public $Description;

    /**
     * @param string $SiteId 专用集群所属的SiteId
     * @param string $Name 专用集群的名称
     * @param string $Zone 专用集群所属的可用区
     * @param string $Description 专用集群的描述
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
