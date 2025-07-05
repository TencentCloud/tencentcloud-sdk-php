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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布问答
 *
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getAction() 获取状态
 * @method void setAction(integer $Action) 设置状态
 * @method string getActionDesc() 获取状态描述
 * @method void setActionDesc(string $ActionDesc) 设置状态描述
 * @method integer getSource() 获取来源1:文档生成，2：批量导入，3：手动添加
 * @method void setSource(integer $Source) 设置来源1:文档生成，2：批量导入，3：手动添加
 * @method string getSourceDesc() 获取来源描述
 * @method void setSourceDesc(string $SourceDesc) 设置来源描述
 * @method string getFileName() 获取文件名字
 * @method void setFileName(string $FileName) 设置文件名字
 * @method string getFileType() 获取文档类型
 * @method void setFileType(string $FileType) 设置文档类型
 * @method string getMessage() 获取失败原因
 * @method void setMessage(string $Message) 设置失败原因
 * @method integer getReleaseStatus() 获取发布状态
 * @method void setReleaseStatus(integer $ReleaseStatus) 设置发布状态
 * @method string getQaBizId() 获取QAID
 * @method void setQaBizId(string $QaBizId) 设置QAID
 * @method string getDocBizId() 获取文档业务ID
 * @method void setDocBizId(string $DocBizId) 设置文档业务ID
 */
class ReleaseQA extends AbstractModel
{
    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 状态
     */
    public $Action;

    /**
     * @var string 状态描述
     */
    public $ActionDesc;

    /**
     * @var integer 来源1:文档生成，2：批量导入，3：手动添加
     */
    public $Source;

    /**
     * @var string 来源描述
     */
    public $SourceDesc;

    /**
     * @var string 文件名字
     */
    public $FileName;

    /**
     * @var string 文档类型
     */
    public $FileType;

    /**
     * @var string 失败原因
     */
    public $Message;

    /**
     * @var integer 发布状态
     */
    public $ReleaseStatus;

    /**
     * @var string QAID
     */
    public $QaBizId;

    /**
     * @var string 文档业务ID
     */
    public $DocBizId;

    /**
     * @param string $Question 问题
     * @param string $UpdateTime 更新时间
     * @param integer $Action 状态
     * @param string $ActionDesc 状态描述
     * @param integer $Source 来源1:文档生成，2：批量导入，3：手动添加
     * @param string $SourceDesc 来源描述
     * @param string $FileName 文件名字
     * @param string $FileType 文档类型
     * @param string $Message 失败原因
     * @param integer $ReleaseStatus 发布状态
     * @param string $QaBizId QAID
     * @param string $DocBizId 文档业务ID
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }
    }
}
