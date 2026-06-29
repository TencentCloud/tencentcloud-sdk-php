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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseFiles请求参数结构体
 *
 * @method integer getProjectID() 获取<p>项目 id</p>
 * @method void setProjectID(integer $ProjectID) 设置<p>项目 id</p>
 * @method string getFileVersion() 获取<p>文件版本</p>
 * @method void setFileVersion(string $FileVersion) 设置<p>文件版本</p>
 * @method string getFileName() 获取<p>查询过滤条件（根据sourcemap的文件名模糊匹配）</p>
 * @method void setFileName(string $FileName) 设置<p>查询过滤条件（根据sourcemap的文件名模糊匹配）</p>
 * @method boolean getIgnoreDefaultTimeRange() 获取<p>false/不传=保留「最近 3 个月」约束（旧行为）；true=绕过时间窗口</p>
 * @method void setIgnoreDefaultTimeRange(boolean $IgnoreDefaultTimeRange) 设置<p>false/不传=保留「最近 3 个月」约束（旧行为）；true=绕过时间窗口</p>
 */
class DescribeReleaseFilesRequest extends AbstractModel
{
    /**
     * @var integer <p>项目 id</p>
     */
    public $ProjectID;

    /**
     * @var string <p>文件版本</p>
     */
    public $FileVersion;

    /**
     * @var string <p>查询过滤条件（根据sourcemap的文件名模糊匹配）</p>
     */
    public $FileName;

    /**
     * @var boolean <p>false/不传=保留「最近 3 个月」约束（旧行为）；true=绕过时间窗口</p>
     */
    public $IgnoreDefaultTimeRange;

    /**
     * @param integer $ProjectID <p>项目 id</p>
     * @param string $FileVersion <p>文件版本</p>
     * @param string $FileName <p>查询过滤条件（根据sourcemap的文件名模糊匹配）</p>
     * @param boolean $IgnoreDefaultTimeRange <p>false/不传=保留「最近 3 个月」约束（旧行为）；true=绕过时间窗口</p>
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("FileVersion",$param) and $param["FileVersion"] !== null) {
            $this->FileVersion = $param["FileVersion"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("IgnoreDefaultTimeRange",$param) and $param["IgnoreDefaultTimeRange"] !== null) {
            $this->IgnoreDefaultTimeRange = $param["IgnoreDefaultTimeRange"];
        }
    }
}
