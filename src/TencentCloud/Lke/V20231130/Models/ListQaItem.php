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
 * 问答详情数据
 *
 * @method string getQaBizId() 获取问答ID
 * @method void setQaBizId(string $QaBizId) 设置问答ID
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getAnswer() 获取答案
 * @method void setAnswer(string $Answer) 设置答案
 * @method integer getSource() 获取来源
 * @method void setSource(integer $Source) 设置来源
 * @method string getSourceDesc() 获取来源描述
 * @method void setSourceDesc(string $SourceDesc) 设置来源描述
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getIsAllowEdit() 获取是否允许编辑
 * @method void setIsAllowEdit(boolean $IsAllowEdit) 设置是否允许编辑
 * @method boolean getIsAllowDelete() 获取是否允许删除
 * @method void setIsAllowDelete(boolean $IsAllowDelete) 设置是否允许删除
 * @method boolean getIsAllowAccept() 获取是否允许校验
 * @method void setIsAllowAccept(boolean $IsAllowAccept) 设置是否允许校验
 * @method string getFileName() 获取文档名称
 * @method void setFileName(string $FileName) 设置文档名称
 * @method string getFileType() 获取文档类型
 * @method void setFileType(string $FileType) 设置文档类型
 * @method string getQaCharSize() 获取问答字符数
 * @method void setQaCharSize(string $QaCharSize) 设置问答字符数
 * @method string getExpireStart() 获取有效开始时间，unix时间戳
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，unix时间戳
 * @method string getExpireEnd() 获取有效结束时间，unix时间戳，0代表永久有效
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，unix时间戳，0代表永久有效
 * @method integer getAttrRange() 获取属性标签适用范围 1：全部，2：按条件
 * @method void setAttrRange(integer $AttrRange) 设置属性标签适用范围 1：全部，2：按条件
 * @method array getAttrLabels() 获取属性标签
 * @method void setAttrLabels(array $AttrLabels) 设置属性标签
 * @method integer getSimilarQuestionNum() 获取相似问个数
 * @method void setSimilarQuestionNum(integer $SimilarQuestionNum) 设置相似问个数
 * @method string getSimilarQuestionTips() 获取返回问答关联的相似问,联动搜索,仅展示一条
 * @method void setSimilarQuestionTips(string $SimilarQuestionTips) 设置返回问答关联的相似问,联动搜索,仅展示一条
 * @method boolean getIsDisabled() 获取问答是否停用，false:未停用，ture:已停用
 * @method void setIsDisabled(boolean $IsDisabled) 设置问答是否停用，false:未停用，ture:已停用
 */
class ListQaItem extends AbstractModel
{
    /**
     * @var string 问答ID
     */
    public $QaBizId;

    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 答案
     */
    public $Answer;

    /**
     * @var integer 来源
     */
    public $Source;

    /**
     * @var string 来源描述
     */
    public $SourceDesc;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否允许编辑
     */
    public $IsAllowEdit;

    /**
     * @var boolean 是否允许删除
     */
    public $IsAllowDelete;

    /**
     * @var boolean 是否允许校验
     */
    public $IsAllowAccept;

    /**
     * @var string 文档名称
     */
    public $FileName;

    /**
     * @var string 文档类型
     */
    public $FileType;

    /**
     * @var string 问答字符数
     */
    public $QaCharSize;

    /**
     * @var string 有效开始时间，unix时间戳
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，unix时间戳，0代表永久有效
     */
    public $ExpireEnd;

    /**
     * @var integer 属性标签适用范围 1：全部，2：按条件
     */
    public $AttrRange;

    /**
     * @var array 属性标签
     */
    public $AttrLabels;

    /**
     * @var integer 相似问个数
     */
    public $SimilarQuestionNum;

    /**
     * @var string 返回问答关联的相似问,联动搜索,仅展示一条
     */
    public $SimilarQuestionTips;

    /**
     * @var boolean 问答是否停用，false:未停用，ture:已停用
     */
    public $IsDisabled;

    /**
     * @param string $QaBizId 问答ID
     * @param string $Question 问题
     * @param string $Answer 答案
     * @param integer $Source 来源
     * @param string $SourceDesc 来源描述
     * @param string $UpdateTime 更新时间
     * @param integer $Status 状态
     * @param string $StatusDesc 状态描述
     * @param string $DocBizId 文档ID
     * @param string $CreateTime 创建时间
     * @param boolean $IsAllowEdit 是否允许编辑
     * @param boolean $IsAllowDelete 是否允许删除
     * @param boolean $IsAllowAccept 是否允许校验
     * @param string $FileName 文档名称
     * @param string $FileType 文档类型
     * @param string $QaCharSize 问答字符数
     * @param string $ExpireStart 有效开始时间，unix时间戳
     * @param string $ExpireEnd 有效结束时间，unix时间戳，0代表永久有效
     * @param integer $AttrRange 属性标签适用范围 1：全部，2：按条件
     * @param array $AttrLabels 属性标签
     * @param integer $SimilarQuestionNum 相似问个数
     * @param string $SimilarQuestionTips 返回问答关联的相似问,联动搜索,仅展示一条
     * @param boolean $IsDisabled 问答是否停用，false:未停用，ture:已停用
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }

        if (array_key_exists("IsAllowAccept",$param) and $param["IsAllowAccept"] !== null) {
            $this->IsAllowAccept = $param["IsAllowAccept"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("QaCharSize",$param) and $param["QaCharSize"] !== null) {
            $this->QaCharSize = $param["QaCharSize"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabel();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("SimilarQuestionNum",$param) and $param["SimilarQuestionNum"] !== null) {
            $this->SimilarQuestionNum = $param["SimilarQuestionNum"];
        }

        if (array_key_exists("SimilarQuestionTips",$param) and $param["SimilarQuestionTips"] !== null) {
            $this->SimilarQuestionTips = $param["SimilarQuestionTips"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
