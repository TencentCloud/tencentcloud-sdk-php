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
 * 文档片段
 *
 * @method string getId() 获取片段ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置片段ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessId() 获取业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessId(string $BusinessId) 设置业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型(markdown,word,txt)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型(markdown,word,txt)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSegmentType() 获取文档切片类型(segment-文档切片 table-表格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentType(string $SegmentType) 设置文档切片类型(segment-文档切片 table-表格)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageContent() 获取段落内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageContent(string $PageContent) 设置段落内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgData() 获取段落原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgData(string $OrgData) 设置段落原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocId() 获取文章ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置文章ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocBizId() 获取文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocUrl() 获取文档链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocUrl(string $DocUrl) 设置文档链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocSegment extends AbstractModel
{
    /**
     * @var string 片段ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessId;

    /**
     * @var string 文件类型(markdown,word,txt)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string 文档切片类型(segment-文档切片 table-表格)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentType;

    /**
     * @var string 标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 段落内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageContent;

    /**
     * @var string 段落原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgData;

    /**
     * @var string 文章ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @var string 文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocBizId;

    /**
     * @var string 文档链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocUrl;

    /**
     * @param string $Id 片段ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessId 业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型(markdown,word,txt)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SegmentType 文档切片类型(segment-文档切片 table-表格)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageContent 段落内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgData 段落原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocId 文章ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocBizId 文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocUrl 文档链接
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

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("SegmentType",$param) and $param["SegmentType"] !== null) {
            $this->SegmentType = $param["SegmentType"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("PageContent",$param) and $param["PageContent"] !== null) {
            $this->PageContent = $param["PageContent"];
        }

        if (array_key_exists("OrgData",$param) and $param["OrgData"] !== null) {
            $this->OrgData = $param["OrgData"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("DocUrl",$param) and $param["DocUrl"] !== null) {
            $this->DocUrl = $param["DocUrl"];
        }
    }
}
