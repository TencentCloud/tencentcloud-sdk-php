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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMem0Service返回参数结构体
 *
 * @method string getStatus() 获取<p>mem0服务运行状态</p><p>枚举值：</p><ul><li>running： mem0服务正常运行</li><li>none： 未开通</li><li>creating： 正在开通</li><li>deleting： mem0服务关闭中</li></ul>
 * @method void setStatus(string $Status) 设置<p>mem0服务运行状态</p><p>枚举值：</p><ul><li>running： mem0服务正常运行</li><li>none： 未开通</li><li>creating： 正在开通</li><li>deleting： mem0服务关闭中</li></ul>
 * @method string getCreateTime() 获取<p>Mem0服务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>Mem0服务创建时间</p>
 * @method string getUpdateTime() 获取<p>Mem0服务最后更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>Mem0服务最后更新时间</p>
 * @method string getInnerAddress() 获取<p>Mem0服务访问地址</p>
 * @method void setInnerAddress(string $InnerAddress) 设置<p>Mem0服务访问地址</p>
 * @method string getAgenticBaseId() 获取<p>Mem0服务使用的AgenticBase</p>
 * @method void setAgenticBaseId(string $AgenticBaseId) 设置<p>Mem0服务使用的AgenticBase</p>
 * @method string getLLMMode() 获取<p>Mem0服务使用的LLM提供方</p><p>枚举值：</p><ul><li>tokenhub： 腾讯云大模型服务平台TokenHub</li></ul>
 * @method void setLLMMode(string $LLMMode) 设置<p>Mem0服务使用的LLM提供方</p><p>枚举值：</p><ul><li>tokenhub： 腾讯云大模型服务平台TokenHub</li></ul>
 * @method string getLLMModel() 获取<p>Mem0服务使用的LLM模型</p>
 * @method void setLLMModel(string $LLMModel) 设置<p>Mem0服务使用的LLM模型</p>
 * @method string getEmbeddingModel() 获取<p>Mem0服务当前使用的Embedding 模型</p>
 * @method void setEmbeddingModel(string $EmbeddingModel) 设置<p>Mem0服务当前使用的Embedding 模型</p>
 * @method integer getEmbeddingDims() 获取<p>Embedding 向量维度，目前固定1024</p>
 * @method void setEmbeddingDims(integer $EmbeddingDims) 设置<p>Embedding 向量维度，目前固定1024</p>
 * @method string getPGDatabaseName() 获取<p>Mem0服务使用的PG数据库</p>
 * @method void setPGDatabaseName(string $PGDatabaseName) 设置<p>Mem0服务使用的PG数据库</p>
 * @method string getPGUserName() 获取<p>Mem0服务使用的PG用户名</p>
 * @method void setPGUserName(string $PGUserName) 设置<p>Mem0服务使用的PG用户名</p>
 * @method array getNetworkAccessList() 获取<p>Mem0的网络状态</p>
 * @method void setNetworkAccessList(array $NetworkAccessList) 设置<p>Mem0的网络状态</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMem0ServiceResponse extends AbstractModel
{
    /**
     * @var string <p>mem0服务运行状态</p><p>枚举值：</p><ul><li>running： mem0服务正常运行</li><li>none： 未开通</li><li>creating： 正在开通</li><li>deleting： mem0服务关闭中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Mem0服务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Mem0服务最后更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Mem0服务访问地址</p>
     */
    public $InnerAddress;

    /**
     * @var string <p>Mem0服务使用的AgenticBase</p>
     */
    public $AgenticBaseId;

    /**
     * @var string <p>Mem0服务使用的LLM提供方</p><p>枚举值：</p><ul><li>tokenhub： 腾讯云大模型服务平台TokenHub</li></ul>
     */
    public $LLMMode;

    /**
     * @var string <p>Mem0服务使用的LLM模型</p>
     */
    public $LLMModel;

    /**
     * @var string <p>Mem0服务当前使用的Embedding 模型</p>
     */
    public $EmbeddingModel;

    /**
     * @var integer <p>Embedding 向量维度，目前固定1024</p>
     */
    public $EmbeddingDims;

    /**
     * @var string <p>Mem0服务使用的PG数据库</p>
     */
    public $PGDatabaseName;

    /**
     * @var string <p>Mem0服务使用的PG用户名</p>
     */
    public $PGUserName;

    /**
     * @var array <p>Mem0的网络状态</p>
     */
    public $NetworkAccessList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>mem0服务运行状态</p><p>枚举值：</p><ul><li>running： mem0服务正常运行</li><li>none： 未开通</li><li>creating： 正在开通</li><li>deleting： mem0服务关闭中</li></ul>
     * @param string $CreateTime <p>Mem0服务创建时间</p>
     * @param string $UpdateTime <p>Mem0服务最后更新时间</p>
     * @param string $InnerAddress <p>Mem0服务访问地址</p>
     * @param string $AgenticBaseId <p>Mem0服务使用的AgenticBase</p>
     * @param string $LLMMode <p>Mem0服务使用的LLM提供方</p><p>枚举值：</p><ul><li>tokenhub： 腾讯云大模型服务平台TokenHub</li></ul>
     * @param string $LLMModel <p>Mem0服务使用的LLM模型</p>
     * @param string $EmbeddingModel <p>Mem0服务当前使用的Embedding 模型</p>
     * @param integer $EmbeddingDims <p>Embedding 向量维度，目前固定1024</p>
     * @param string $PGDatabaseName <p>Mem0服务使用的PG数据库</p>
     * @param string $PGUserName <p>Mem0服务使用的PG用户名</p>
     * @param array $NetworkAccessList <p>Mem0的网络状态</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InnerAddress",$param) and $param["InnerAddress"] !== null) {
            $this->InnerAddress = $param["InnerAddress"];
        }

        if (array_key_exists("AgenticBaseId",$param) and $param["AgenticBaseId"] !== null) {
            $this->AgenticBaseId = $param["AgenticBaseId"];
        }

        if (array_key_exists("LLMMode",$param) and $param["LLMMode"] !== null) {
            $this->LLMMode = $param["LLMMode"];
        }

        if (array_key_exists("LLMModel",$param) and $param["LLMModel"] !== null) {
            $this->LLMModel = $param["LLMModel"];
        }

        if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
            $this->EmbeddingModel = $param["EmbeddingModel"];
        }

        if (array_key_exists("EmbeddingDims",$param) and $param["EmbeddingDims"] !== null) {
            $this->EmbeddingDims = $param["EmbeddingDims"];
        }

        if (array_key_exists("PGDatabaseName",$param) and $param["PGDatabaseName"] !== null) {
            $this->PGDatabaseName = $param["PGDatabaseName"];
        }

        if (array_key_exists("PGUserName",$param) and $param["PGUserName"] !== null) {
            $this->PGUserName = $param["PGUserName"];
        }

        if (array_key_exists("NetworkAccessList",$param) and $param["NetworkAccessList"] !== null) {
            $this->NetworkAccessList = [];
            foreach ($param["NetworkAccessList"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->NetworkAccessList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
