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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库信息
 *
 * @method string getKnowledgeBaseId() 获取知识库id
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库id
 * @method string getKnowledgeBaseName() 获取知识库名称

 * @method void setKnowledgeBaseName(string $KnowledgeBaseName) 设置知识库名称

 * @method string getKnowledgeBaseDesc() 获取知识库描述
 * @method void setKnowledgeBaseDesc(string $KnowledgeBaseDesc) 设置知识库描述
 * @method string getCreator() 获取创建者subuin
 * @method void setCreator(string $Creator) 设置创建者subuin
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getFileNum() 获取文件数量
 * @method void setFileNum(integer $FileNum) 设置文件数量
 * @method array getDatasourceIds() 获取知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展
 * @method void setDatasourceIds(array $DatasourceIds) 设置知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展
 */
class KnowledgeBase extends AbstractModel
{
    /**
     * @var string 知识库id
     */
    public $KnowledgeBaseId;

    /**
     * @var string 知识库名称

     */
    public $KnowledgeBaseName;

    /**
     * @var string 知识库描述
     */
    public $KnowledgeBaseDesc;

    /**
     * @var string 创建者subuin
     */
    public $Creator;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 文件数量
     */
    public $FileNum;

    /**
     * @var array 知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展
     */
    public $DatasourceIds;

    /**
     * @param string $KnowledgeBaseId 知识库id
     * @param string $KnowledgeBaseName 知识库名称

     * @param string $KnowledgeBaseDesc 知识库描述
     * @param string $Creator 创建者subuin
     * @param string $CreateTime 创建时间
     * @param integer $FileNum 文件数量
     * @param array $DatasourceIds 知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展
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

        if (array_key_exists("KnowledgeBaseName",$param) and $param["KnowledgeBaseName"] !== null) {
            $this->KnowledgeBaseName = $param["KnowledgeBaseName"];
        }

        if (array_key_exists("KnowledgeBaseDesc",$param) and $param["KnowledgeBaseDesc"] !== null) {
            $this->KnowledgeBaseDesc = $param["KnowledgeBaseDesc"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FileNum",$param) and $param["FileNum"] !== null) {
            $this->FileNum = $param["FileNum"];
        }

        if (array_key_exists("DatasourceIds",$param) and $param["DatasourceIds"] !== null) {
            $this->DatasourceIds = $param["DatasourceIds"];
        }
    }
}
