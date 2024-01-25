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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAdvanceRunParams请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getRemotePath() 获取远程路径
 * @method void setRemotePath(string $RemotePath) 设置远程路径
 * @method string getAdvanceRunParam() 获取高级运行参数
 * @method void setAdvanceRunParam(string $AdvanceRunParam) 设置高级运行参数
 * @method array getOriginalParams() 获取原始未过滤的高级运行参数
 * @method void setOriginalParams(array $OriginalParams) 设置原始未过滤的高级运行参数
 */
class GetAdvanceRunParamsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 远程路径
     */
    public $RemotePath;

    /**
     * @var string 高级运行参数
     */
    public $AdvanceRunParam;

    /**
     * @var array 原始未过滤的高级运行参数
     */
    public $OriginalParams;

    /**
     * @param string $ProjectId 项目ID
     * @param string $RemotePath 远程路径
     * @param string $AdvanceRunParam 高级运行参数
     * @param array $OriginalParams 原始未过滤的高级运行参数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("AdvanceRunParam",$param) and $param["AdvanceRunParam"] !== null) {
            $this->AdvanceRunParam = $param["AdvanceRunParam"];
        }

        if (array_key_exists("OriginalParams",$param) and $param["OriginalParams"] !== null) {
            $this->OriginalParams = $param["OriginalParams"];
        }
    }
}
