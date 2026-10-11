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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePolicyRule请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统id</p>
 * @method string getScanDir() 获取<p>扫描目录</p>
 * @method void setScanDir(string $ScanDir) 设置<p>扫描目录</p>
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 * @method ExecutionPlan getExecution() 获取<p>执行计划</p>
 * @method void setExecution(ExecutionPlan $Execution) 设置<p>执行计划</p>
 * @method array getPolicyRuleSet() 获取<p>过滤规则</p>
 * @method void setPolicyRuleSet(array $PolicyRuleSet) 设置<p>过滤规则</p>
 * @method boolean getEnableManifest() 获取<p>是否输出清单</p>
 * @method void setEnableManifest(boolean $EnableManifest) 设置<p>是否输出清单</p>
 * @method ManifestAttr getManifest() 获取<p>清单配置</p>
 * @method void setManifest(ManifestAttr $Manifest) 设置<p>清单配置</p>
 */
class CreatePolicyRuleRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>扫描目录</p>
     */
    public $ScanDir;

    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @var ExecutionPlan <p>执行计划</p>
     */
    public $Execution;

    /**
     * @var array <p>过滤规则</p>
     */
    public $PolicyRuleSet;

    /**
     * @var boolean <p>是否输出清单</p>
     */
    public $EnableManifest;

    /**
     * @var ManifestAttr <p>清单配置</p>
     */
    public $Manifest;

    /**
     * @param string $FileSystemId <p>文件系统id</p>
     * @param string $ScanDir <p>扫描目录</p>
     * @param string $Name <p>规则名称</p>
     * @param ExecutionPlan $Execution <p>执行计划</p>
     * @param array $PolicyRuleSet <p>过滤规则</p>
     * @param boolean $EnableManifest <p>是否输出清单</p>
     * @param ManifestAttr $Manifest <p>清单配置</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("ScanDir",$param) and $param["ScanDir"] !== null) {
            $this->ScanDir = $param["ScanDir"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Execution",$param) and $param["Execution"] !== null) {
            $this->Execution = new ExecutionPlan();
            $this->Execution->deserialize($param["Execution"]);
        }

        if (array_key_exists("PolicyRuleSet",$param) and $param["PolicyRuleSet"] !== null) {
            $this->PolicyRuleSet = [];
            foreach ($param["PolicyRuleSet"] as $key => $value){
                $obj = new PolicyRuleOperator();
                $obj->deserialize($value);
                array_push($this->PolicyRuleSet, $obj);
            }
        }

        if (array_key_exists("EnableManifest",$param) and $param["EnableManifest"] !== null) {
            $this->EnableManifest = $param["EnableManifest"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = new ManifestAttr();
            $this->Manifest->deserialize($param["Manifest"]);
        }
    }
}
