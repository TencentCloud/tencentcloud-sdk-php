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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查看漏洞修复详情
 *
 * @method integer getVulId() 获取漏洞id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulId(integer $VulId) 设置漏洞id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulName() 获取漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulName(string $VulName) 设置漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取漏洞修复进度 1-100；
 * @method void setProgress(integer $Progress) 设置漏洞修复进度 1-100；
 * @method array getHostList() 获取漏洞对应主机修复状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostList(array $HostList) 设置漏洞对应主机修复状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailCnt() 获取漏洞修复失败主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailCnt(integer $FailCnt) 设置漏洞修复失败主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFixSuccessCnt() 获取修复成功的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixSuccessCnt(integer $FixSuccessCnt) 设置修复成功的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFixMethod() 获取修复方式 0组件更新或者安装补丁,1禁用服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixMethod(integer $FixMethod) 设置修复方式 0组件更新或者安装补丁,1禁用服务
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulFixStatusInfo extends AbstractModel
{
    /**
     * @var integer 漏洞id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulId;

    /**
     * @var string 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulName;

    /**
     * @var integer 漏洞修复进度 1-100；
     */
    public $Progress;

    /**
     * @var array 漏洞对应主机修复状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostList;

    /**
     * @var integer 漏洞修复失败主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailCnt;

    /**
     * @var integer 修复成功的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixSuccessCnt;

    /**
     * @var integer 修复方式 0组件更新或者安装补丁,1禁用服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixMethod;

    /**
     * @param integer $VulId 漏洞id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulName 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 漏洞修复进度 1-100；
     * @param array $HostList 漏洞对应主机修复状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailCnt 漏洞修复失败主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FixSuccessCnt 修复成功的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FixMethod 修复方式 0组件更新或者安装补丁,1禁用服务
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = [];
            foreach ($param["HostList"] as $key => $value){
                $obj = new VulFixStatusHostInfo();
                $obj->deserialize($value);
                array_push($this->HostList, $obj);
            }
        }

        if (array_key_exists("FailCnt",$param) and $param["FailCnt"] !== null) {
            $this->FailCnt = $param["FailCnt"];
        }

        if (array_key_exists("FixSuccessCnt",$param) and $param["FixSuccessCnt"] !== null) {
            $this->FixSuccessCnt = $param["FixSuccessCnt"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }
    }
}
