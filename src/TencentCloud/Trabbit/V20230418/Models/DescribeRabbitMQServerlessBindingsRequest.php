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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessBindings请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getVirtualHost() 获取Vhost参数
 * @method void setVirtualHost(string $VirtualHost) 设置Vhost参数
 * @method integer getOffset() 获取分页offset
 * @method void setOffset(integer $Offset) 设置分页offset
 * @method integer getLimit() 获取分页limit
 * @method void setLimit(integer $Limit) 设置分页limit
 * @method string getSearchWord() 获取搜索关键词，根据源exchange名称/目标资源名称/绑定key进行模糊搜索
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词，根据源exchange名称/目标资源名称/绑定key进行模糊搜索
 * @method string getSourceExchange() 获取根据源Exchange精准搜索过滤
 * @method void setSourceExchange(string $SourceExchange) 设置根据源Exchange精准搜索过滤
 * @method string getQueueName() 获取根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置
 * @method void setQueueName(string $QueueName) 设置根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置
 * @method string getDestinationExchange() 获取根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置
 * @method void setDestinationExchange(string $DestinationExchange) 设置根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置
 */
class DescribeRabbitMQServerlessBindingsRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string Vhost参数
     */
    public $VirtualHost;

    /**
     * @var integer 分页offset
     */
    public $Offset;

    /**
     * @var integer 分页limit
     */
    public $Limit;

    /**
     * @var string 搜索关键词，根据源exchange名称/目标资源名称/绑定key进行模糊搜索
     */
    public $SearchWord;

    /**
     * @var string 根据源Exchange精准搜索过滤
     */
    public $SourceExchange;

    /**
     * @var string 根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置
     */
    public $QueueName;

    /**
     * @var string 根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置
     */
    public $DestinationExchange;

    /**
     * @param string $InstanceId 实例Id
     * @param string $VirtualHost Vhost参数
     * @param integer $Offset 分页offset
     * @param integer $Limit 分页limit
     * @param string $SearchWord 搜索关键词，根据源exchange名称/目标资源名称/绑定key进行模糊搜索
     * @param string $SourceExchange 根据源Exchange精准搜索过滤
     * @param string $QueueName 根据目标QueueName精准搜索过滤，和DestinationExchange过滤不可同时设置
     * @param string $DestinationExchange 根据目标Exchange精准搜索过滤，和QueueName过滤不可同时设置
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
