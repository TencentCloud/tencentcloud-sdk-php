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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LogDiagnosisRules
 *
 * @method integer getId() 获取<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorCode() 获取<p>errorCode</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(integer $ErrorCode) 设置<p>errorCode</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>createTime</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>createTime</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdate() 获取<p>lastUpdate</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdate(string $LastUpdate) 设置<p>lastUpdate</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取<p>owner</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置<p>owner</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorTitle() 获取<p>异常概要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorTitle(string $ErrorTitle) 设置<p>异常概要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>异常关键字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>异常关键字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorReason() 获取<p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorReason(string $ErrorReason) 设置<p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorSolution() 获取<p>解决办法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorSolution(string $ErrorSolution) 设置<p>解决办法</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorOrder() 获取<p>展示顺序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorOrder(string $ErrorOrder) 设置<p>展示顺序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorExample() 获取<p>例子</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorExample(string $ErrorExample) 设置<p>例子</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtToolsUrl() 获取<p>扩展说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtToolsUrl(string $ExtToolsUrl) 设置<p>扩展说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorLevel() 获取<p>异常级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorLevel(string $ErrorLevel) 设置<p>异常级别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorTypeAggregation() 获取<p>异常类型：用户/系统</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorTypeAggregation(string $ErrorTypeAggregation) 设置<p>异常类型：用户/系统</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorSystem() 获取<p>异常系统类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorSystem(string $ErrorSystem) 设置<p>异常系统类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorLogSystem() 获取<p>异常日志来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorLogSystem(string $ErrorLogSystem) 设置<p>异常日志来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogDiagnosisRules extends AbstractModel
{
    /**
     * @var integer <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer <p>errorCode</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>createTime</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>lastUpdate</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdate;

    /**
     * @var string <p>owner</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string <p>异常概要</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorTitle;

    /**
     * @var string <p>异常关键字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string <p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorReason;

    /**
     * @var string <p>解决办法</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorSolution;

    /**
     * @var string <p>展示顺序</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorOrder;

    /**
     * @var string <p>例子</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorExample;

    /**
     * @var string <p>扩展说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtToolsUrl;

    /**
     * @var string <p>异常级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorLevel;

    /**
     * @var string <p>异常类型：用户/系统</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorTypeAggregation;

    /**
     * @var string <p>异常系统类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorSystem;

    /**
     * @var string <p>异常日志来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorLogSystem;

    /**
     * @param integer $Id <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorCode <p>errorCode</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>createTime</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdate <p>lastUpdate</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner <p>owner</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorTitle <p>异常概要</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>异常关键字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorReason <p>异常原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorSolution <p>解决办法</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorOrder <p>展示顺序</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorExample <p>例子</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtToolsUrl <p>扩展说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorLevel <p>异常级别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorTypeAggregation <p>异常类型：用户/系统</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorSystem <p>异常系统类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorLogSystem <p>异常日志来源</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("ErrorTitle",$param) and $param["ErrorTitle"] !== null) {
            $this->ErrorTitle = $param["ErrorTitle"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }

        if (array_key_exists("ErrorSolution",$param) and $param["ErrorSolution"] !== null) {
            $this->ErrorSolution = $param["ErrorSolution"];
        }

        if (array_key_exists("ErrorOrder",$param) and $param["ErrorOrder"] !== null) {
            $this->ErrorOrder = $param["ErrorOrder"];
        }

        if (array_key_exists("ErrorExample",$param) and $param["ErrorExample"] !== null) {
            $this->ErrorExample = $param["ErrorExample"];
        }

        if (array_key_exists("ExtToolsUrl",$param) and $param["ExtToolsUrl"] !== null) {
            $this->ExtToolsUrl = $param["ExtToolsUrl"];
        }

        if (array_key_exists("ErrorLevel",$param) and $param["ErrorLevel"] !== null) {
            $this->ErrorLevel = $param["ErrorLevel"];
        }

        if (array_key_exists("ErrorTypeAggregation",$param) and $param["ErrorTypeAggregation"] !== null) {
            $this->ErrorTypeAggregation = $param["ErrorTypeAggregation"];
        }

        if (array_key_exists("ErrorSystem",$param) and $param["ErrorSystem"] !== null) {
            $this->ErrorSystem = $param["ErrorSystem"];
        }

        if (array_key_exists("ErrorLogSystem",$param) and $param["ErrorLogSystem"] !== null) {
            $this->ErrorLogSystem = $param["ErrorLogSystem"];
        }
    }
}
