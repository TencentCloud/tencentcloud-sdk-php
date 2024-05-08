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
 * ParseDoc请求参数结构体
 *
 * @method string getName() 获取文件名称(需要包括文件后缀, 最大长度1024字节)
 * @method void setName(string $Name) 设置文件名称(需要包括文件后缀, 最大长度1024字节)
 * @method string getUrl() 获取文件下载链接 (支持的文件类型: docx, txt, markdown, pdf), 该地址需要外网可以直接无状态访问
 * @method void setUrl(string $Url) 设置文件下载链接 (支持的文件类型: docx, txt, markdown, pdf), 该地址需要外网可以直接无状态访问
 * @method string getTaskId() 获取任务ID, 用于幂等去重, 业务自行定义(最大长度64字节)
 * @method void setTaskId(string $TaskId) 设置任务ID, 用于幂等去重, 业务自行定义(最大长度64字节)
 * @method string getPolicy() 获取切分策略
 * @method void setPolicy(string $Policy) 设置切分策略
 * @method string getOperate() 获取默认值: parse
 * @method void setOperate(string $Operate) 设置默认值: parse
 */
class ParseDocRequest extends AbstractModel
{
    /**
     * @var string 文件名称(需要包括文件后缀, 最大长度1024字节)
     */
    public $Name;

    /**
     * @var string 文件下载链接 (支持的文件类型: docx, txt, markdown, pdf), 该地址需要外网可以直接无状态访问
     */
    public $Url;

    /**
     * @var string 任务ID, 用于幂等去重, 业务自行定义(最大长度64字节)
     */
    public $TaskId;

    /**
     * @var string 切分策略
     */
    public $Policy;

    /**
     * @var string 默认值: parse
     * @deprecated
     */
    public $Operate;

    /**
     * @param string $Name 文件名称(需要包括文件后缀, 最大长度1024字节)
     * @param string $Url 文件下载链接 (支持的文件类型: docx, txt, markdown, pdf), 该地址需要外网可以直接无状态访问
     * @param string $TaskId 任务ID, 用于幂等去重, 业务自行定义(最大长度64字节)
     * @param string $Policy 切分策略
     * @param string $Operate 默认值: parse
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}
