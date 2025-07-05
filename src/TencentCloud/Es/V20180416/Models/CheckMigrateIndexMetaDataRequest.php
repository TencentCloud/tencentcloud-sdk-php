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
 * CheckMigrateIndexMetaData请求参数结构体
 *
 * @method string getServerlessId() 获取索引 id
 * @method void setServerlessId(string $ServerlessId) 设置索引 id
 * @method string getSnapshot() 获取快照名
 * @method void setSnapshot(string $Snapshot) 设置快照名
 * @method string getCosBucket() 获取Cos桶名
 * @method void setCosBucket(string $CosBucket) 设置Cos桶名
 * @method string getBasePath() 获取BasePath路径
 * @method void setBasePath(string $BasePath) 设置BasePath路径
 * @method string getClusterInstanceId() 获取云上集群名
 * @method void setClusterInstanceId(string $ClusterInstanceId) 设置云上集群名
 * @method array getCommonIndexArr() 获取普通索引名列表
 * @method void setCommonIndexArr(array $CommonIndexArr) 设置普通索引名列表
 * @method array getDataStreamArr() 获取自治索引名列表
 * @method void setDataStreamArr(array $DataStreamArr) 设置自治索引名列表
 */
class CheckMigrateIndexMetaDataRequest extends AbstractModel
{
    /**
     * @var string 索引 id
     */
    public $ServerlessId;

    /**
     * @var string 快照名
     */
    public $Snapshot;

    /**
     * @var string Cos桶名
     */
    public $CosBucket;

    /**
     * @var string BasePath路径
     */
    public $BasePath;

    /**
     * @var string 云上集群名
     */
    public $ClusterInstanceId;

    /**
     * @var array 普通索引名列表
     */
    public $CommonIndexArr;

    /**
     * @var array 自治索引名列表
     */
    public $DataStreamArr;

    /**
     * @param string $ServerlessId 索引 id
     * @param string $Snapshot 快照名
     * @param string $CosBucket Cos桶名
     * @param string $BasePath BasePath路径
     * @param string $ClusterInstanceId 云上集群名
     * @param array $CommonIndexArr 普通索引名列表
     * @param array $DataStreamArr 自治索引名列表
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
        if (array_key_exists("ServerlessId",$param) and $param["ServerlessId"] !== null) {
            $this->ServerlessId = $param["ServerlessId"];
        }

        if (array_key_exists("Snapshot",$param) and $param["Snapshot"] !== null) {
            $this->Snapshot = $param["Snapshot"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("ClusterInstanceId",$param) and $param["ClusterInstanceId"] !== null) {
            $this->ClusterInstanceId = $param["ClusterInstanceId"];
        }

        if (array_key_exists("CommonIndexArr",$param) and $param["CommonIndexArr"] !== null) {
            $this->CommonIndexArr = $param["CommonIndexArr"];
        }

        if (array_key_exists("DataStreamArr",$param) and $param["DataStreamArr"] !== null) {
            $this->DataStreamArr = $param["DataStreamArr"];
        }
    }
}
