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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunServer返回参数结构体
 *
 * @method integer getTotalCount() 获取个数
 * @method void setTotalCount(integer $TotalCount) 设置个数
 * @method array getVersionItems() 获取版本列表
 * @method void setVersionItems(array $VersionItems) 设置版本列表
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method boolean getIsPublic() 获取是否对于外网开放
 * @method void setIsPublic(boolean $IsPublic) 设置是否对于外网开放
 * @method string getImageRepo() 获取镜像仓库
 * @method void setImageRepo(string $ImageRepo) 设置镜像仓库
 * @method string getTrafficType() 获取流量配置的类型（FLOW,URL_PARAMS)
 * @method void setTrafficType(string $TrafficType) 设置流量配置的类型（FLOW,URL_PARAMS)
 * @method string getSourceType() 获取服务创建类型，默认为空，一键部署为oneclick
 * @method void setSourceType(string $SourceType) 设置服务创建类型，默认为空，一键部署为oneclick
 * @method string getTag() 获取服务标签, function: 托管函数
 * @method void setTag(string $Tag) 设置服务标签, function: 托管函数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseRunServerResponse extends AbstractModel
{
    /**
     * @var integer 个数
     */
    public $TotalCount;

    /**
     * @var array 版本列表
     */
    public $VersionItems;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var boolean 是否对于外网开放
     */
    public $IsPublic;

    /**
     * @var string 镜像仓库
     */
    public $ImageRepo;

    /**
     * @var string 流量配置的类型（FLOW,URL_PARAMS)
     */
    public $TrafficType;

    /**
     * @var string 服务创建类型，默认为空，一键部署为oneclick
     */
    public $SourceType;

    /**
     * @var string 服务标签, function: 托管函数
     */
    public $Tag;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 个数
     * @param array $VersionItems 版本列表
     * @param string $ServerName 服务名称
     * @param boolean $IsPublic 是否对于外网开放
     * @param string $ImageRepo 镜像仓库
     * @param string $TrafficType 流量配置的类型（FLOW,URL_PARAMS)
     * @param string $SourceType 服务创建类型，默认为空，一键部署为oneclick
     * @param string $Tag 服务标签, function: 托管函数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VersionItems",$param) and $param["VersionItems"] !== null) {
            $this->VersionItems = [];
            foreach ($param["VersionItems"] as $key => $value){
                $obj = new CloudBaseRunServerVersionItem();
                $obj->deserialize($value);
                array_push($this->VersionItems, $obj);
            }
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("ImageRepo",$param) and $param["ImageRepo"] !== null) {
            $this->ImageRepo = $param["ImageRepo"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
