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
 * @method string getKnowledgeBaseId() 获取<p>知识库id</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库id</p>
 * @method string getKnowledgeBaseName() 获取<p>知识库名称</p>
 * @method void setKnowledgeBaseName(string $KnowledgeBaseName) 设置<p>知识库名称</p>
 * @method string getKnowledgeBaseDesc() 获取<p>知识库描述</p>
 * @method void setKnowledgeBaseDesc(string $KnowledgeBaseDesc) 设置<p>知识库描述</p>
 * @method string getCreator() 获取<p>创建者subuin</p>
 * @method void setCreator(string $Creator) 设置<p>创建者subuin</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getFileNum() 获取<p>文件数量</p>
 * @method void setFileNum(integer $FileNum) 设置<p>文件数量</p>
 * @method array getDatasourceIds() 获取<p>知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展</p>
 * @method void setDatasourceIds(array $DatasourceIds) 设置<p>知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展</p>
 * @method KnowledgeTaskConfig getConfig() 获取<p>知识库任务配置</p>
 * @method void setConfig(KnowledgeTaskConfig $Config) 设置<p>知识库任务配置</p>
 */
class KnowledgeBase extends AbstractModel
{
    /**
     * @var string <p>知识库id</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var string <p>知识库名称</p>
     */
    public $KnowledgeBaseName;

    /**
     * @var string <p>知识库描述</p>
     */
    public $KnowledgeBaseDesc;

    /**
     * @var string <p>创建者subuin</p>
     */
    public $Creator;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>文件数量</p>
     */
    public $FileNum;

    /**
     * @var array <p>知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展</p>
     */
    public $DatasourceIds;

    /**
     * @var KnowledgeTaskConfig <p>知识库任务配置</p>
     */
    public $Config;

    /**
     * @param string $KnowledgeBaseId <p>知识库id</p>
     * @param string $KnowledgeBaseName <p>知识库名称</p>
     * @param string $KnowledgeBaseDesc <p>知识库描述</p>
     * @param string $Creator <p>创建者subuin</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $FileNum <p>文件数量</p>
     * @param array $DatasourceIds <p>知识库关联的数据库列表，目前是只绑定一个数据源，数组预留拓展</p>
     * @param KnowledgeTaskConfig $Config <p>知识库任务配置</p>
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new KnowledgeTaskConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
