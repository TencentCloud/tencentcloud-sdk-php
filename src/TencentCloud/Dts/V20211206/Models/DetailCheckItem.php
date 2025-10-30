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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 每个检查步骤里的具体检查项
 *
 * @method string getCheckItemName() 获取检查项的名称，如：源实例权限检查
 * @method void setCheckItemName(string $CheckItemName) 设置检查项的名称，如：源实例权限检查
 * @method string getDescription() 获取检查项详细内容
 * @method void setDescription(string $Description) 设置检查项详细内容
 * @method string getCheckResult() 获取pass(通过)，failed(失败), warning(校验有警告，但仍通过)
 * @method void setCheckResult(string $CheckResult) 设置pass(通过)，failed(失败), warning(校验有警告，但仍通过)
 * @method string getFailureReason() 获取检查项失败原因
 * @method void setFailureReason(string $FailureReason) 设置检查项失败原因
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method array getErrorLog() 获取运行报错日志
 * @method void setErrorLog(array $ErrorLog) 设置运行报错日志
 * @method array getHelpDoc() 获取详细帮助的文档链接
 * @method void setHelpDoc(array $HelpDoc) 设置详细帮助的文档链接
 * @method string getSkipInfo() 获取跳过风险文案
 * @method void setSkipInfo(string $SkipInfo) 设置跳过风险文案
 */
class DetailCheckItem extends AbstractModel
{
    /**
     * @var string 检查项的名称，如：源实例权限检查
     */
    public $CheckItemName;

    /**
     * @var string 检查项详细内容
     */
    public $Description;

    /**
     * @var string pass(通过)，failed(失败), warning(校验有警告，但仍通过)
     */
    public $CheckResult;

    /**
     * @var string 检查项失败原因
     */
    public $FailureReason;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var array 运行报错日志
     */
    public $ErrorLog;

    /**
     * @var array 详细帮助的文档链接
     */
    public $HelpDoc;

    /**
     * @var string 跳过风险文案
     */
    public $SkipInfo;

    /**
     * @param string $CheckItemName 检查项的名称，如：源实例权限检查
     * @param string $Description 检查项详细内容
     * @param string $CheckResult pass(通过)，failed(失败), warning(校验有警告，但仍通过)
     * @param string $FailureReason 检查项失败原因
     * @param string $Solution 解决方案
     * @param array $ErrorLog 运行报错日志
     * @param array $HelpDoc 详细帮助的文档链接
     * @param string $SkipInfo 跳过风险文案
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
        if (array_key_exists("CheckItemName",$param) and $param["CheckItemName"] !== null) {
            $this->CheckItemName = $param["CheckItemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }

        if (array_key_exists("SkipInfo",$param) and $param["SkipInfo"] !== null) {
            $this->SkipInfo = $param["SkipInfo"];
        }
    }
}
