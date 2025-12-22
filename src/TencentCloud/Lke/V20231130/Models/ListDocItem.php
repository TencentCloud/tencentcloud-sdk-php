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
 * 文档列表详情描述
 *
 * @method string getDocBizId() 获取文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewName() 获取重命名的新文档名称，在重命名提交之后，文档发布之前都是这个名称
 * @method void setNewName(string $NewName) 设置重命名的新文档名称，在重命名提交之后，文档发布之前都是这个名称
 * @method string getFileType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosUrl() 获取cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosUrl(string $CosUrl) 设置cos路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取文档状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置文档状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取文档状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置文档状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsRefer() 获取答案中是否引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRefer(boolean $IsRefer) 设置答案中是否引用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQaNum() 获取问答对数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaNum(integer $QaNum) 设置问答对数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDeleted() 获取是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeleted(boolean $IsDeleted) 设置是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取文档来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置文档来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceDesc() 获取文档来源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceDesc(string $SourceDesc) 设置文档来源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowRestart() 获取是否允许重新生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowRestart(boolean $IsAllowRestart) 设置是否允许重新生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDeletedQa() 获取qa是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDeletedQa(boolean $IsDeletedQa) 设置qa是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCreatingQa() 获取问答是否生成中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCreatingQa(boolean $IsCreatingQa) 设置问答是否生成中
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowDelete() 获取是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowDelete(boolean $IsAllowDelete) 设置是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowRefer() 获取是否允许操作引用开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowRefer(boolean $IsAllowRefer) 设置是否允许操作引用开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCreatedQa() 获取问答是否生成过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCreatedQa(boolean $IsCreatedQa) 设置问答是否生成过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocCharSize() 获取文档字符量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocCharSize(string $DocCharSize) 设置文档字符量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttrRange() 获取属性标签适用范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrRange(integer $AttrRange) 设置属性标签适用范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttrLabels() 获取属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrLabels(array $AttrLabels) 设置属性标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowEdit() 获取是否允许编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowEdit(boolean $IsAllowEdit) 设置是否允许编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReferUrlType() 获取外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferUrlType(integer $ReferUrlType) 设置外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebUrl() 获取网页(或自定义链接)地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebUrl(string $WebUrl) 设置网页(或自定义链接)地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireStart() 获取有效开始时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireStart(string $ExpireStart) 设置有效开始时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireEnd() 获取有效结束时间，unix时间戳，0代表永久有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireEnd(string $ExpireEnd) 设置有效结束时间，unix时间戳，0代表永久有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAllowRetry() 获取是否允许重试，0：否，1：是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAllowRetry(boolean $IsAllowRetry) 设置是否允许重试，0：否，1：是
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcessing() 获取0:文档比对处理 1:文档生成问答
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessing(array $Processing) 设置0:文档比对处理 1:文档生成问答
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取文档创建落库时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置文档创建落库时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCateBizId() 获取文档所属分类ID
 * @method void setCateBizId(string $CateBizId) 设置文档所属分类ID
 * @method string getCustomerKnowledgeId() 获取文档的用户自定义ID
 * @method void setCustomerKnowledgeId(string $CustomerKnowledgeId) 设置文档的用户自定义ID
 * @method array getAttributeFlags() 获取文档的属性标记，0: 不做用户外部权限校验
 * @method void setAttributeFlags(array $AttributeFlags) 设置文档的属性标记，0: 不做用户外部权限校验
 * @method boolean getIsDisabled() 获取false:未停用，ture:已停用
 * @method void setIsDisabled(boolean $IsDisabled) 设置false:未停用，ture:已停用
 * @method string getStaffName() 获取员工名称
 * @method void setStaffName(string $StaffName) 设置员工名称
 * @method integer getEnableScope() 获取文档生效域: 1-停用；2-仅开发域；3-仅发布域；4-全域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableScope(integer $EnableScope) 设置文档生效域: 1-停用；2-仅开发域；3-仅发布域；4-全域
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListDocItem extends AbstractModel
{
    /**
     * @var string 文档ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocBizId;

    /**
     * @var string 文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 重命名的新文档名称，在重命名提交之后，文档发布之前都是这个名称
     */
    public $NewName;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string cos路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosUrl;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 文档状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 文档状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var string 原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var boolean 答案中是否引用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRefer;

    /**
     * @var integer 问答对数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaNum;

    /**
     * @var boolean 是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeleted;

    /**
     * @var integer 文档来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 文档来源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceDesc;

    /**
     * @var boolean 是否允许重新生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowRestart;

    /**
     * @var boolean qa是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDeletedQa;

    /**
     * @var boolean 问答是否生成中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCreatingQa;

    /**
     * @var boolean 是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowDelete;

    /**
     * @var boolean 是否允许操作引用开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowRefer;

    /**
     * @var boolean 问答是否生成过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCreatedQa;

    /**
     * @var string 文档字符量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocCharSize;

    /**
     * @var integer 属性标签适用范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrRange;

    /**
     * @var array 属性标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrLabels;

    /**
     * @var boolean 是否允许编辑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowEdit;

    /**
     * @var integer 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferUrlType;

    /**
     * @var string 网页(或自定义链接)地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebUrl;

    /**
     * @var string 有效开始时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireStart;

    /**
     * @var string 有效结束时间，unix时间戳，0代表永久有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireEnd;

    /**
     * @var boolean 是否允许重试，0：否，1：是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAllowRetry;

    /**
     * @var array 0:文档比对处理 1:文档生成问答
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Processing;

    /**
     * @var string 文档创建落库时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 文档所属分类ID
     */
    public $CateBizId;

    /**
     * @var string 文档的用户自定义ID
     */
    public $CustomerKnowledgeId;

    /**
     * @var array 文档的属性标记，0: 不做用户外部权限校验
     */
    public $AttributeFlags;

    /**
     * @var boolean false:未停用，ture:已停用
     */
    public $IsDisabled;

    /**
     * @var string 员工名称
     */
    public $StaffName;

    /**
     * @var integer 文档生效域: 1-停用；2-仅开发域；3-仅发布域；4-全域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableScope;

    /**
     * @param string $DocBizId 文档ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewName 重命名的新文档名称，在重命名提交之后，文档发布之前都是这个名称
     * @param string $FileType 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosUrl cos路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 文档状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 文档状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsRefer 答案中是否引用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QaNum 问答对数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDeleted 是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 文档来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceDesc 文档来源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowRestart 是否允许重新生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDeletedQa qa是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCreatingQa 问答是否生成中
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowDelete 是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowRefer 是否允许操作引用开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCreatedQa 问答是否生成过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocCharSize 文档字符量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttrRange 属性标签适用范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttrLabels 属性标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowEdit 是否允许编辑
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReferUrlType 外部引用链接类型 0：系统链接 1：自定义链接
值为1时，WebUrl 字段不能为空，否则不生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebUrl 网页(或自定义链接)地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireStart 有效开始时间，unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireEnd 有效结束时间，unix时间戳，0代表永久有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAllowRetry 是否允许重试，0：否，1：是
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Processing 0:文档比对处理 1:文档生成问答
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 文档创建落库时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CateBizId 文档所属分类ID
     * @param string $CustomerKnowledgeId 文档的用户自定义ID
     * @param array $AttributeFlags 文档的属性标记，0: 不做用户外部权限校验
     * @param boolean $IsDisabled false:未停用，ture:已停用
     * @param string $StaffName 员工名称
     * @param integer $EnableScope 文档生效域: 1-停用；2-仅开发域；3-仅发布域；4-全域
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("IsRefer",$param) and $param["IsRefer"] !== null) {
            $this->IsRefer = $param["IsRefer"];
        }

        if (array_key_exists("QaNum",$param) and $param["QaNum"] !== null) {
            $this->QaNum = $param["QaNum"];
        }

        if (array_key_exists("IsDeleted",$param) and $param["IsDeleted"] !== null) {
            $this->IsDeleted = $param["IsDeleted"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("IsAllowRestart",$param) and $param["IsAllowRestart"] !== null) {
            $this->IsAllowRestart = $param["IsAllowRestart"];
        }

        if (array_key_exists("IsDeletedQa",$param) and $param["IsDeletedQa"] !== null) {
            $this->IsDeletedQa = $param["IsDeletedQa"];
        }

        if (array_key_exists("IsCreatingQa",$param) and $param["IsCreatingQa"] !== null) {
            $this->IsCreatingQa = $param["IsCreatingQa"];
        }

        if (array_key_exists("IsAllowDelete",$param) and $param["IsAllowDelete"] !== null) {
            $this->IsAllowDelete = $param["IsAllowDelete"];
        }

        if (array_key_exists("IsAllowRefer",$param) and $param["IsAllowRefer"] !== null) {
            $this->IsAllowRefer = $param["IsAllowRefer"];
        }

        if (array_key_exists("IsCreatedQa",$param) and $param["IsCreatedQa"] !== null) {
            $this->IsCreatedQa = $param["IsCreatedQa"];
        }

        if (array_key_exists("DocCharSize",$param) and $param["DocCharSize"] !== null) {
            $this->DocCharSize = $param["DocCharSize"];
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

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
        }

        if (array_key_exists("ReferUrlType",$param) and $param["ReferUrlType"] !== null) {
            $this->ReferUrlType = $param["ReferUrlType"];
        }

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("IsAllowRetry",$param) and $param["IsAllowRetry"] !== null) {
            $this->IsAllowRetry = $param["IsAllowRetry"];
        }

        if (array_key_exists("Processing",$param) and $param["Processing"] !== null) {
            $this->Processing = $param["Processing"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("CustomerKnowledgeId",$param) and $param["CustomerKnowledgeId"] !== null) {
            $this->CustomerKnowledgeId = $param["CustomerKnowledgeId"];
        }

        if (array_key_exists("AttributeFlags",$param) and $param["AttributeFlags"] !== null) {
            $this->AttributeFlags = $param["AttributeFlags"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("StaffName",$param) and $param["StaffName"] !== null) {
            $this->StaffName = $param["StaffName"];
        }

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }
    }
}
