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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全球数据库任务信息
 *
 * @method string getGdnId() 获取全球数据库唯一标识
 * @method void setGdnId(string $GdnId) 设置全球数据库唯一标识
 * @method string getGdnName() 获取全球数据库唯一别名
 * @method void setGdnName(string $GdnName) 设置全球数据库唯一别名
 * @method string getPrimaryClusterId() 获取主集群ID
 * @method void setPrimaryClusterId(string $PrimaryClusterId) 设置主集群ID
 * @method string getPrimaryClusterRegion() 获取主集群所在地域
 * @method void setPrimaryClusterRegion(string $PrimaryClusterRegion) 设置主集群所在地域
 * @method string getStandbyClusterRegion() 获取从集群所在地域
 * @method void setStandbyClusterRegion(string $StandbyClusterRegion) 设置从集群所在地域
 * @method string getStandbyClusterId() 获取从集群ID
 * @method void setStandbyClusterId(string $StandbyClusterId) 设置从集群ID
 * @method string getStandbyClusterName() 获取从集群别名
 * @method void setStandbyClusterName(string $StandbyClusterName) 设置从集群别名
 */
class GdnTaskInfo extends AbstractModel
{
    /**
     * @var string 全球数据库唯一标识
     */
    public $GdnId;

    /**
     * @var string 全球数据库唯一别名
     */
    public $GdnName;

    /**
     * @var string 主集群ID
     */
    public $PrimaryClusterId;

    /**
     * @var string 主集群所在地域
     */
    public $PrimaryClusterRegion;

    /**
     * @var string 从集群所在地域
     */
    public $StandbyClusterRegion;

    /**
     * @var string 从集群ID
     */
    public $StandbyClusterId;

    /**
     * @var string 从集群别名
     */
    public $StandbyClusterName;

    /**
     * @param string $GdnId 全球数据库唯一标识
     * @param string $GdnName 全球数据库唯一别名
     * @param string $PrimaryClusterId 主集群ID
     * @param string $PrimaryClusterRegion 主集群所在地域
     * @param string $StandbyClusterRegion 从集群所在地域
     * @param string $StandbyClusterId 从集群ID
     * @param string $StandbyClusterName 从集群别名
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
        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }

        if (array_key_exists("GdnName",$param) and $param["GdnName"] !== null) {
            $this->GdnName = $param["GdnName"];
        }

        if (array_key_exists("PrimaryClusterId",$param) and $param["PrimaryClusterId"] !== null) {
            $this->PrimaryClusterId = $param["PrimaryClusterId"];
        }

        if (array_key_exists("PrimaryClusterRegion",$param) and $param["PrimaryClusterRegion"] !== null) {
            $this->PrimaryClusterRegion = $param["PrimaryClusterRegion"];
        }

        if (array_key_exists("StandbyClusterRegion",$param) and $param["StandbyClusterRegion"] !== null) {
            $this->StandbyClusterRegion = $param["StandbyClusterRegion"];
        }

        if (array_key_exists("StandbyClusterId",$param) and $param["StandbyClusterId"] !== null) {
            $this->StandbyClusterId = $param["StandbyClusterId"];
        }

        if (array_key_exists("StandbyClusterName",$param) and $param["StandbyClusterName"] !== null) {
            $this->StandbyClusterName = $param["StandbyClusterName"];
        }
    }
}
