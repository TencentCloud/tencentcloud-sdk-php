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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GooseFSx存储选项概览信息。
 *
 * @method array getMasters() 获取文件系统master的ip和端口列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasters(array $Masters) 设置文件系统master的ip和端口列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalPath() 获取文件系统的本地挂载路径。GooseFSx目前只支持挂载在/goosefsx/{文件系统ID}_proxy/目录下。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalPath(string $LocalPath) 设置文件系统的本地挂载路径。GooseFSx目前只支持挂载在/goosefsx/{文件系统ID}_proxy/目录下。
注意：此字段可能返回 null，表示取不到有效值。
 */
class GooseFSxOptionOverview extends AbstractModel
{
    /**
     * @var array 文件系统master的ip和端口列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Masters;

    /**
     * @var string 文件系统的本地挂载路径。GooseFSx目前只支持挂载在/goosefsx/{文件系统ID}_proxy/目录下。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalPath;

    /**
     * @param array $Masters 文件系统master的ip和端口列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalPath 文件系统的本地挂载路径。GooseFSx目前只支持挂载在/goosefsx/{文件系统ID}_proxy/目录下。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Masters",$param) and $param["Masters"] !== null) {
            $this->Masters = $param["Masters"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}
