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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDoc返回参数结构体
 *
 * @method string getDocBizId() 获取文档ID
 * @method void setDocBizId(string $DocBizId) 设置文档ID
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getCosUrl() 获取cos路径
 * @method void setCosUrl(string $CosUrl) 设置cos路径
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getStatus() 获取文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功 7-审核中 8-审核失败 9-审核成功 10-待发布 11-发布中 12-已发布 13-学习中 14-学习失败 15-更新中 16-更新失败 17-解析中 18-解析失败 19-导入失败 20-已过期 21-超量失效 22-超量失效恢复
 * @method void setStatus(integer $Status) 设置文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功 7-审核中 8-审核失败 9-审核成功 10-待发布 11-发布中 12-已发布 13-学习中 14-学习失败 15-更新中 16-更新失败 17-解析中 18-解析失败 19-导入失败 20-已过期 21-超量失效 22-超量失效恢复
 * @method string getStatusDesc() 获取文档状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置文档状态描述
 * @method string getReason() 获取生成失败原因
 * @method void setReason(string $Reason) 设置生成失败原因
 * @method boolean getIsRefer() 获取答案中是否引用
 * @method void setIsRefer(boolean $IsRefer) 设置答案中是否引用
 * @method integer getQaNum() 获取问答对数量
 * @method void setQaNum(integer $QaNum) 设置问答对数量
 * @method boolean getIsDeleted() 获取是否删除
 * @method void setIsDeleted(boolean $IsDeleted) 设置是否删除
 * @method integer getSource() 获取文档来源
 * @method void setSource(integer $Source) 设置文档来源
 * @method string getSourceDesc() 获取文档来源描述
 * @method void setSourceDesc(string $SourceDesc) 设置文档来源描述
 * @method boolean getIsAllowRestart() 获取是否允许重新生成
 * @method void setIsAllowRestart(boolean $IsAllowRestart) 设置是否允许重新生成
 * @method boolean getIsDeletedQa() 获取qa是否已删除
 * @method void setIsDeletedQa(boolean $IsDeletedQa) 设置qa是否已删除
 * @method boolean getIsCreatingQa() 获取问答是否生成中
 * @method void setIsCreatingQa(boolean $IsCreatingQa) 设置问答是否生成中
 * @method boolean getIsAllowDelete() 获取是否允许删除
 * @method void setIsAllowDelete(boolean $IsAllowDelete) 设置是否允许删除
 * @method boolean getIsAllowRefer() 获取是否允许操作引用开关
 * @method void setIsAllowRefer(boolean $IsAllowRefer) 设置是否允许操作引用开关
 * @method boolean getIsCreatedQa() 获取是否生成过问答
 * @method void setIsCreatedQa(boolean $IsCreatedQa) 设置是否生成过问答
 * @method string getDocCharSize() 获取文档字符量
 * @method void setDocCharSize(string $DocCharSize) 设置文档字符量
 * @method boolean getIsAllowEdit() 获取是否允许编辑
 * @method void setIsAllowEdit(boolean $IsAllowEdit) 设置是否允许编辑
 * @method integer getAttrRange() 获取标签适用范围 1：全部，2：按条件范围
 * @method void setAttrRange(integer $AttrRange) 设置标签适用范围 1：全部，2：按条件范围
 * @method array getAttrLabels() 获取标签
 * @method void setAttrLabels(array $AttrLabels) 设置标签
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method boolean getIsDisabled() 获取文档是否停用，false:未停用，true:已停用
 * @method void setIsDisabled(boolean $IsDisabled) 设置文档是否停用，false:未停用，true:已停用
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDocResponse extends AbstractModel
{
    /**
     * @var string 文档ID
     */
    public $DocBizId;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string cos路径
     */
    public $CosUrl;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功 7-审核中 8-审核失败 9-审核成功 10-待发布 11-发布中 12-已发布 13-学习中 14-学习失败 15-更新中 16-更新失败 17-解析中 18-解析失败 19-导入失败 20-已过期 21-超量失效 22-超量失效恢复
     */
    public $Status;

    /**
     * @var string 文档状态描述
     */
    public $StatusDesc;

    /**
     * @var string 生成失败原因
     */
    public $Reason;

    /**
     * @var boolean 答案中是否引用
     */
    public $IsRefer;

    /**
     * @var integer 问答对数量
     */
    public $QaNum;

    /**
     * @var boolean 是否删除
     */
    public $IsDeleted;

    /**
     * @var integer 文档来源
     */
    public $Source;

    /**
     * @var string 文档来源描述
     */
    public $SourceDesc;

    /**
     * @var boolean 是否允许重新生成
     */
    public $IsAllowRestart;

    /**
     * @var boolean qa是否已删除
     */
    public $IsDeletedQa;

    /**
     * @var boolean 问答是否生成中
     */
    public $IsCreatingQa;

    /**
     * @var boolean 是否允许删除
     */
    public $IsAllowDelete;

    /**
     * @var boolean 是否允许操作引用开关
     */
    public $IsAllowRefer;

    /**
     * @var boolean 是否生成过问答
     */
    public $IsCreatedQa;

    /**
     * @var string 文档字符量
     */
    public $DocCharSize;

    /**
     * @var boolean 是否允许编辑
     */
    public $IsAllowEdit;

    /**
     * @var integer 标签适用范围 1：全部，2：按条件范围
     */
    public $AttrRange;

    /**
     * @var array 标签
     */
    public $AttrLabels;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var boolean 文档是否停用，false:未停用，true:已停用
     */
    public $IsDisabled;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DocBizId 文档ID
     * @param string $FileName 文件名称
     * @param string $FileType 文件类型
     * @param string $CosUrl cos路径
     * @param string $UpdateTime 更新时间
     * @param integer $Status 文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功 7-审核中 8-审核失败 9-审核成功 10-待发布 11-发布中 12-已发布 13-学习中 14-学习失败 15-更新中 16-更新失败 17-解析中 18-解析失败 19-导入失败 20-已过期 21-超量失效 22-超量失效恢复
     * @param string $StatusDesc 文档状态描述
     * @param string $Reason 生成失败原因
     * @param boolean $IsRefer 答案中是否引用
     * @param integer $QaNum 问答对数量
     * @param boolean $IsDeleted 是否删除
     * @param integer $Source 文档来源
     * @param string $SourceDesc 文档来源描述
     * @param boolean $IsAllowRestart 是否允许重新生成
     * @param boolean $IsDeletedQa qa是否已删除
     * @param boolean $IsCreatingQa 问答是否生成中
     * @param boolean $IsAllowDelete 是否允许删除
     * @param boolean $IsAllowRefer 是否允许操作引用开关
     * @param boolean $IsCreatedQa 是否生成过问答
     * @param string $DocCharSize 文档字符量
     * @param boolean $IsAllowEdit 是否允许编辑
     * @param integer $AttrRange 标签适用范围 1：全部，2：按条件范围
     * @param array $AttrLabels 标签
     * @param string $CateBizId 分类ID
     * @param boolean $IsDisabled 文档是否停用，false:未停用，true:已停用
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("IsAllowEdit",$param) and $param["IsAllowEdit"] !== null) {
            $this->IsAllowEdit = $param["IsAllowEdit"];
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

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
