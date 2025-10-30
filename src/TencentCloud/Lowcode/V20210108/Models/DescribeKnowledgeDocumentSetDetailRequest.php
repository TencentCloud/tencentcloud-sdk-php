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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKnowledgeDocumentSetDetail请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getCollectionView() 获取知识库标识
 * @method void setCollectionView(string $CollectionView) 设置知识库标识
 * @method string getDocumentSetName() 获取文件名
 * @method void setDocumentSetName(string $DocumentSetName) 设置文件名
 * @method string getDocumentSetId() 获取文件id
 * @method void setDocumentSetId(string $DocumentSetId) 设置文件id
 */
class DescribeKnowledgeDocumentSetDetailRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 知识库标识
     */
    public $CollectionView;

    /**
     * @var string 文件名
     */
    public $DocumentSetName;

    /**
     * @var string 文件id
     */
    public $DocumentSetId;

    /**
     * @param string $EnvId 环境ID
     * @param string $CollectionView 知识库标识
     * @param string $DocumentSetName 文件名
     * @param string $DocumentSetId 文件id
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("CollectionView",$param) and $param["CollectionView"] !== null) {
            $this->CollectionView = $param["CollectionView"];
        }

        if (array_key_exists("DocumentSetName",$param) and $param["DocumentSetName"] !== null) {
            $this->DocumentSetName = $param["DocumentSetName"];
        }

        if (array_key_exists("DocumentSetId",$param) and $param["DocumentSetId"] !== null) {
            $this->DocumentSetId = $param["DocumentSetId"];
        }
    }
}
