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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署流程下载信息
 *
 * @method string getFileName() 获取文件夹名称
 * @method void setFileName(string $FileName) 设置文件夹名称
 * @method array getFlowIdList() 获取签署流程的标识数组
 * @method void setFlowIdList(array $FlowIdList) 设置签署流程的标识数组
 */
class DownloadFlowInfo extends AbstractModel
{
    /**
     * @var string 文件夹名称
     */
    public $FileName;

    /**
     * @var array 签署流程的标识数组
     */
    public $FlowIdList;

    /**
     * @param string $FileName 文件夹名称
     * @param array $FlowIdList 签署流程的标识数组
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FlowIdList",$param) and $param["FlowIdList"] !== null) {
            $this->FlowIdList = $param["FlowIdList"];
        }
    }
}
