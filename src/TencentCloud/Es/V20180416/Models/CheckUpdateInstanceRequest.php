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
 * CheckUpdateInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getNodeNum() 获取已废弃，请使用NodeInfoList
变配后的节点个数（2-50个）
 * @method void setNodeNum(integer $NodeNum) 设置已废弃，请使用NodeInfoList
变配后的节点个数（2-50个）
 * @method string getNodeType() 获取已废弃，请使用NodeInfoList
变配后的节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置已废弃，请使用NodeInfoList
变配后的节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getDiskSize() 获取已废弃，请使用NodeInfoList
变配后的磁盘大小（单位GB）
 * @method void setDiskSize(integer $DiskSize) 设置已废弃，请使用NodeInfoList
变配后的磁盘大小（单位GB）
 * @method integer getMasterNodeNum() 获取已废弃，请使用NodeInfoList
变配后的专用主节点个数（仅支持3个和5个）
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置已废弃，请使用NodeInfoList
变配后的专用主节点个数（仅支持3个和5个）
 * @method string getMasterNodeType() 获取已废弃，请使用NodeInfoList
变配后的专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) 设置已废弃，请使用NodeInfoList
变配后的专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method array getNodeInfoList() 获取节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method void setNodeInfoList(array $NodeInfoList) 设置节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method boolean getForceRestart() 获取更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>默认值为false
 * @method void setForceRestart(boolean $ForceRestart) 设置更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>默认值为false
 * @method integer getScaleType() 获取0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method void setScaleType(integer $ScaleType) 设置0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method array getMultiZoneInfo() 获取多可用区部署
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置多可用区部署
 * @method WebNodeTypeInfo getWebNodeTypeInfo() 获取可视化节点配置
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) 设置可视化节点配置
 * @method CosBackup getCosBackup() 获取COS自动备份信息
 * @method void setCosBackup(CosBackup $CosBackup) 设置COS自动备份信息
 * @method integer getReadWriteMode() 获取读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
 * @method void setReadWriteMode(integer $ReadWriteMode) 设置读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
 */
class CheckUpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 已废弃，请使用NodeInfoList
变配后的节点个数（2-50个）
     */
    public $NodeNum;

    /**
     * @var string 已废弃，请使用NodeInfoList
变配后的节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var integer 已废弃，请使用NodeInfoList
变配后的磁盘大小（单位GB）
     */
    public $DiskSize;

    /**
     * @var integer 已废弃，请使用NodeInfoList
变配后的专用主节点个数（仅支持3个和5个）
     */
    public $MasterNodeNum;

    /**
     * @var string 已废弃，请使用NodeInfoList
变配后的专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $MasterNodeType;

    /**
     * @var array 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     */
    public $NodeInfoList;

    /**
     * @var boolean 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>默认值为false
     */
    public $ForceRestart;

    /**
     * @var integer 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     */
    public $ScaleType;

    /**
     * @var array 多可用区部署
     */
    public $MultiZoneInfo;

    /**
     * @var WebNodeTypeInfo 可视化节点配置
     */
    public $WebNodeTypeInfo;

    /**
     * @var CosBackup COS自动备份信息
     */
    public $CosBackup;

    /**
     * @var integer 读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
     */
    public $ReadWriteMode;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $NodeNum 已废弃，请使用NodeInfoList
变配后的节点个数（2-50个）
     * @param string $NodeType 已废弃，请使用NodeInfoList
变配后的节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $DiskSize 已废弃，请使用NodeInfoList
变配后的磁盘大小（单位GB）
     * @param integer $MasterNodeNum 已废弃，请使用NodeInfoList
变配后的专用主节点个数（仅支持3个和5个）
     * @param string $MasterNodeType 已废弃，请使用NodeInfoList
变配后的专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param array $NodeInfoList 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     * @param boolean $ForceRestart 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>默认值为false
     * @param integer $ScaleType 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     * @param array $MultiZoneInfo 多可用区部署
     * @param WebNodeTypeInfo $WebNodeTypeInfo 可视化节点配置
     * @param CosBackup $CosBackup COS自动备份信息
     * @param integer $ReadWriteMode 读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("ReadWriteMode",$param) and $param["ReadWriteMode"] !== null) {
            $this->ReadWriteMode = $param["ReadWriteMode"];
        }
    }
}
