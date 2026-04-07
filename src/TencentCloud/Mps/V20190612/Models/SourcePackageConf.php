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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源文件信息。
 *
 * @method string getGroupName() 获取group名称，当channel为Linear模式并且选择了vod source的时候，该group 名称和channel output的输出组名称对应。
 * @method void setGroupName(string $GroupName) 设置group名称，当channel为Linear模式并且选择了vod source的时候，该group 名称和channel output的输出组名称对应。
 * @method string getType() 获取类型，区分HLS和DASH，可选值：HLS、DASH。
 * @method void setType(string $Type) 设置类型，区分HLS和DASH，可选值：HLS、DASH。
 * @method string getPath() 获取访问路径。
 * @method void setPath(string $Path) 设置访问路径。
 */
class SourcePackageConf extends AbstractModel
{
    /**
     * @var string group名称，当channel为Linear模式并且选择了vod source的时候，该group 名称和channel output的输出组名称对应。
     */
    public $GroupName;

    /**
     * @var string 类型，区分HLS和DASH，可选值：HLS、DASH。
     */
    public $Type;

    /**
     * @var string 访问路径。
     */
    public $Path;

    /**
     * @param string $GroupName group名称，当channel为Linear模式并且选择了vod source的时候，该group 名称和channel output的输出组名称对应。
     * @param string $Type 类型，区分HLS和DASH，可选值：HLS、DASH。
     * @param string $Path 访问路径。
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
