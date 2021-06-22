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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例Kibana节点相关信息
 *
 * @method string getKibanaNodeType() 获取Kibana节点规格
 * @method void setKibanaNodeType(string $KibanaNodeType) 设置Kibana节点规格
 * @method integer getKibanaNodeNum() 获取Kibana节点个数
 * @method void setKibanaNodeNum(integer $KibanaNodeNum) 设置Kibana节点个数
 * @method integer getKibanaNodeCpuNum() 获取Kibana节点CPU数
 * @method void setKibanaNodeCpuNum(integer $KibanaNodeCpuNum) 设置Kibana节点CPU数
 * @method integer getKibanaNodeMemSize() 获取Kibana节点内存GB
 * @method void setKibanaNodeMemSize(integer $KibanaNodeMemSize) 设置Kibana节点内存GB
 * @method string getKibanaNodeDiskType() 获取Kibana节点磁盘类型
 * @method void setKibanaNodeDiskType(string $KibanaNodeDiskType) 设置Kibana节点磁盘类型
 * @method integer getKibanaNodeDiskSize() 获取Kibana节点磁盘大小
 * @method void setKibanaNodeDiskSize(integer $KibanaNodeDiskSize) 设置Kibana节点磁盘大小
 */
class KibanaNodeInfo extends AbstractModel
{
    /**
     * @var string Kibana节点规格
     */
    public $KibanaNodeType;

    /**
     * @var integer Kibana节点个数
     */
    public $KibanaNodeNum;

    /**
     * @var integer Kibana节点CPU数
     */
    public $KibanaNodeCpuNum;

    /**
     * @var integer Kibana节点内存GB
     */
    public $KibanaNodeMemSize;

    /**
     * @var string Kibana节点磁盘类型
     */
    public $KibanaNodeDiskType;

    /**
     * @var integer Kibana节点磁盘大小
     */
    public $KibanaNodeDiskSize;

    /**
     * @param string $KibanaNodeType Kibana节点规格
     * @param integer $KibanaNodeNum Kibana节点个数
     * @param integer $KibanaNodeCpuNum Kibana节点CPU数
     * @param integer $KibanaNodeMemSize Kibana节点内存GB
     * @param string $KibanaNodeDiskType Kibana节点磁盘类型
     * @param integer $KibanaNodeDiskSize Kibana节点磁盘大小
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
        if (array_key_exists("KibanaNodeType",$param) and $param["KibanaNodeType"] !== null) {
            $this->KibanaNodeType = $param["KibanaNodeType"];
        }

        if (array_key_exists("KibanaNodeNum",$param) and $param["KibanaNodeNum"] !== null) {
            $this->KibanaNodeNum = $param["KibanaNodeNum"];
        }

        if (array_key_exists("KibanaNodeCpuNum",$param) and $param["KibanaNodeCpuNum"] !== null) {
            $this->KibanaNodeCpuNum = $param["KibanaNodeCpuNum"];
        }

        if (array_key_exists("KibanaNodeMemSize",$param) and $param["KibanaNodeMemSize"] !== null) {
            $this->KibanaNodeMemSize = $param["KibanaNodeMemSize"];
        }

        if (array_key_exists("KibanaNodeDiskType",$param) and $param["KibanaNodeDiskType"] !== null) {
            $this->KibanaNodeDiskType = $param["KibanaNodeDiskType"];
        }

        if (array_key_exists("KibanaNodeDiskSize",$param) and $param["KibanaNodeDiskSize"] !== null) {
            $this->KibanaNodeDiskSize = $param["KibanaNodeDiskSize"];
        }
    }
}
