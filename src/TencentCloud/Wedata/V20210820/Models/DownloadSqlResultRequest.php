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
 * DownloadSqlResult请求参数结构体
 *
 * @method integer getDetailId() 获取SQL任务Id
 * @method void setDetailId(integer $DetailId) 设置SQL任务Id
 * @method string getFileName() 获取下载文件名
 * @method void setFileName(string $FileName) 设置下载文件名
 * @method string getSeparatorChar() 获取字段分隔符
 * @method void setSeparatorChar(string $SeparatorChar) 设置字段分隔符
 * @method string getProjectId() 获取必填，否则报错，项目ID
 * @method void setProjectId(string $ProjectId) 设置必填，否则报错，项目ID
 */
class DownloadSqlResultRequest extends AbstractModel
{
    /**
     * @var integer SQL任务Id
     */
    public $DetailId;

    /**
     * @var string 下载文件名
     */
    public $FileName;

    /**
     * @var string 字段分隔符
     */
    public $SeparatorChar;

    /**
     * @var string 必填，否则报错，项目ID
     */
    public $ProjectId;

    /**
     * @param integer $DetailId SQL任务Id
     * @param string $FileName 下载文件名
     * @param string $SeparatorChar 字段分隔符
     * @param string $ProjectId 必填，否则报错，项目ID
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
        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("SeparatorChar",$param) and $param["SeparatorChar"] !== null) {
            $this->SeparatorChar = $param["SeparatorChar"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
