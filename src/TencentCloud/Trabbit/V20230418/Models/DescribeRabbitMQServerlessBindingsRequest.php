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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessBindings请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getVirtualHost() 获取<p>Vhost参数</p>
 * @method void setVirtualHost(string $VirtualHost) 设置<p>Vhost参数</p>
 * @method integer getOffset() 获取<p>分页offset</p>
 * @method void setOffset(integer $Offset) 设置<p>分页offset</p>
 * @method integer getLimit() 获取<p>分页limit</p>
 * @method void setLimit(integer $Limit) 设置<p>分页limit</p>
 * @method string getSearchWord() 获取<p>搜索关键词，根据源exchange名称/目标资源名称进行模糊搜索</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索关键词，根据源exchange名称/目标资源名称进行模糊搜索</p>
 * @method string getSourceExchange() 获取<p>根据源Exchange精准搜索过滤</p>
 * @method void setSourceExchange(string $SourceExchange) 设置<p>根据源Exchange精准搜索过滤</p>
 * @method string getQueueName() 获取<p>根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置</p>
 * @method void setQueueName(string $QueueName) 设置<p>根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置</p>
 * @method string getDestinationExchange() 获取<p>根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置</p>
 * @method void setDestinationExchange(string $DestinationExchange) 设置<p>根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置</p>
 */
class DescribeRabbitMQServerlessBindingsRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Vhost参数</p>
     */
    public $VirtualHost;

    /**
     * @var integer <p>分页offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页limit</p>
     */
    public $Limit;

    /**
     * @var string <p>搜索关键词，根据源exchange名称/目标资源名称进行模糊搜索</p>
     */
    public $SearchWord;

    /**
     * @var string <p>根据源Exchange精准搜索过滤</p>
     */
    public $SourceExchange;

    /**
     * @var string <p>根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置</p>
     */
    public $QueueName;

    /**
     * @var string <p>根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置</p>
     */
    public $DestinationExchange;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param string $VirtualHost <p>Vhost参数</p>
     * @param integer $Offset <p>分页offset</p>
     * @param integer $Limit <p>分页limit</p>
     * @param string $SearchWord <p>搜索关键词，根据源exchange名称/目标资源名称进行模糊搜索</p>
     * @param string $SourceExchange <p>根据源Exchange精准搜索过滤</p>
     * @param string $QueueName <p>根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置</p>
     * @param string $DestinationExchange <p>根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("SourceExchange",$param) and $param["SourceExchange"] !== null) {
            $this->SourceExchange = $param["SourceExchange"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("DestinationExchange",$param) and $param["DestinationExchange"] !== null) {
            $this->DestinationExchange = $param["DestinationExchange"];
        }
    }
}
