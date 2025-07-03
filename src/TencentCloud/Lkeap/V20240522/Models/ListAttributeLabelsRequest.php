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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttributeLabels请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID
 * @method integer getPageNumber() 获取页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置页码，默认1
 * @method integer getPageSize() 获取每页数目，最大50，默认20
 * @method void setPageSize(integer $PageSize) 设置每页数目，最大50，默认20
 */
class ListAttributeLabelsRequest extends AbstractModel
{
    /**
     * @var string 知识库ID
     */
    public $KnowledgeBaseId;

    /**
     * @var integer 页码，默认1
     */
    public $PageNumber;

    /**
     * @var integer 每页数目，最大50，默认20
     */
    public $PageSize;

    /**
     * @param string $KnowledgeBaseId 知识库ID
     * @param integer $PageNumber 页码，默认1
     * @param integer $PageSize 每页数目，最大50，默认20
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
