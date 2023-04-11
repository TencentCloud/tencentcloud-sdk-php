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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件操作搜索结果
 *
 * @method string getTime() 获取文件操作时间
 * @method void setTime(string $Time) 设置文件操作时间
 * @method integer getMethod() 获取1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
 * @method void setMethod(integer $Method) 设置1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
 * @method string getProtocol() 获取文件传输协议
 * @method void setProtocol(string $Protocol) 设置文件传输协议
 * @method string getFileCurr() 获取method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
 * @method void setFileCurr(string $FileCurr) 设置method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
 * @method string getFileNew() 获取method为重命名、移动文件时代表移动后的新位置.其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNew(string $FileNew) 设置method为重命名、移动文件时代表移动后的新位置.其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAction() 获取堡垒机拦截情况, 1-已执行，  2-被阻断
 * @method void setAction(integer $Action) 设置堡垒机拦截情况, 1-已执行，  2-被阻断
 */
class SearchFileBySidResult extends AbstractModel
{
    /**
     * @var string 文件操作时间
     */
    public $Time;

    /**
     * @var integer 1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
     */
    public $Method;

    /**
     * @var string 文件传输协议
     */
    public $Protocol;

    /**
     * @var string method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
     */
    public $FileCurr;

    /**
     * @var string method为重命名、移动文件时代表移动后的新位置.其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNew;

    /**
     * @var integer method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 堡垒机拦截情况, 1-已执行，  2-被阻断
     */
    public $Action;

    /**
     * @param string $Time 文件操作时间
     * @param integer $Method 1-上传文件 2-下载文件 3-删除文件 4-移动文件 5-重命名文件 6-新建文件夹 7-移动文件夹 8-重命名文件夹 9-删除文件夹
     * @param string $Protocol 文件传输协议
     * @param string $FileCurr method为上传、下载、删除时文件在服务器上的位置, 或重命名、移动文件前文件的位置
     * @param string $FileNew method为重命名、移动文件时代表移动后的新位置.其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size method为上传文件、下载文件、删除文件时显示文件大小。其他情况为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Action 堡垒机拦截情况, 1-已执行，  2-被阻断
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("FileCurr",$param) and $param["FileCurr"] !== null) {
            $this->FileCurr = $param["FileCurr"];
        }

        if (array_key_exists("FileNew",$param) and $param["FileNew"] !== null) {
            $this->FileNew = $param["FileNew"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
