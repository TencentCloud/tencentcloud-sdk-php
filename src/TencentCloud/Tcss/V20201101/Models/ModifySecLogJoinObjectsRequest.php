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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecLogJoinObjects请求参数结构体
 *
 * @method string getLogType() 获取日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method void setLogType(string $LogType) 设置日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
 * @method array getBindList() 获取绑定列表
 * @method void setBindList(array $BindList) 设置绑定列表
 * @method array getUnBindList() 获取待解绑列表，节点范围为全部时，含义为需剔除资产列表
 * @method void setUnBindList(array $UnBindList) 设置待解绑列表，节点范围为全部时，含义为需剔除资产列表
 * @method string getNodeType() 获取节点类型:
NORMAL: 普通节点(默认值)
SUPER: 超级节点

 * @method void setNodeType(string $NodeType) 设置节点类型:
NORMAL: 普通节点(默认值)
SUPER: 超级节点

 * @method integer getRangeType() 获取日志节点范围类型,0自选 1全部
 * @method void setRangeType(integer $RangeType) 设置日志节点范围类型,0自选 1全部
 * @method boolean getAutoJoin() 获取新增资产是否自动加入，节点范围为全部时生效
 * @method void setAutoJoin(boolean $AutoJoin) 设置新增资产是否自动加入，节点范围为全部时生效
 */
class ModifySecLogJoinObjectsRequest extends AbstractModel
{
    /**
     * @var string 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     */
    public $LogType;

    /**
     * @var array 绑定列表
     */
    public $BindList;

    /**
     * @var array 待解绑列表，节点范围为全部时，含义为需剔除资产列表
     */
    public $UnBindList;

    /**
     * @var string 节点类型:
NORMAL: 普通节点(默认值)
SUPER: 超级节点

     */
    public $NodeType;

    /**
     * @var integer 日志节点范围类型,0自选 1全部
     */
    public $RangeType;

    /**
     * @var boolean 新增资产是否自动加入，节点范围为全部时生效
     */
    public $AutoJoin;

    /**
     * @param string $LogType 日志类型
bash日志: container_bash
容器启动: container_launch
k8sApi: k8s_api
     * @param array $BindList 绑定列表
     * @param array $UnBindList 待解绑列表，节点范围为全部时，含义为需剔除资产列表
     * @param string $NodeType 节点类型:
NORMAL: 普通节点(默认值)
SUPER: 超级节点

     * @param integer $RangeType 日志节点范围类型,0自选 1全部
     * @param boolean $AutoJoin 新增资产是否自动加入，节点范围为全部时生效
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("BindList",$param) and $param["BindList"] !== null) {
            $this->BindList = $param["BindList"];
        }

        if (array_key_exists("UnBindList",$param) and $param["UnBindList"] !== null) {
            $this->UnBindList = $param["UnBindList"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("AutoJoin",$param) and $param["AutoJoin"] !== null) {
            $this->AutoJoin = $param["AutoJoin"];
        }
    }
}
