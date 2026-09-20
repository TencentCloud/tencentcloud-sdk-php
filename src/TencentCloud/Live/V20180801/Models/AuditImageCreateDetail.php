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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播审核图库添加图片详细结果。
 *
 * @method integer getStatus() 获取图片上传状态，0 表示成功，其他表示失败。
10101: url 解码失败。
10102: url 解析失败。
10103: url 不是 cos 地址。
10301: label 不合法。
20101: 数据入库错误。
30101: cos 下载图片连接错误。
30102: cos 下载图片响应错误。
40101: 优图接口调用错误。
 * @method void setStatus(integer $Status) 设置图片上传状态，0 表示成功，其他表示失败。
10101: url 解码失败。
10102: url 解析失败。
10103: url 不是 cos 地址。
10301: label 不合法。
20101: 数据入库错误。
30101: cos 下载图片连接错误。
30102: cos 下载图片响应错误。
40101: 优图接口调用错误。
 * @method string getImageId() 获取上传的图片 Id。
 * @method void setImageId(string $ImageId) 设置上传的图片 Id。
 * @method string getIndex() 获取图片上传顺序索引。
 * @method void setIndex(string $Index) 设置图片上传顺序索引。
 */
class AuditImageCreateDetail extends AbstractModel
{
    /**
     * @var integer 图片上传状态，0 表示成功，其他表示失败。
10101: url 解码失败。
10102: url 解析失败。
10103: url 不是 cos 地址。
10301: label 不合法。
20101: 数据入库错误。
30101: cos 下载图片连接错误。
30102: cos 下载图片响应错误。
40101: 优图接口调用错误。
     */
    public $Status;

    /**
     * @var string 上传的图片 Id。
     */
    public $ImageId;

    /**
     * @var string 图片上传顺序索引。
     */
    public $Index;

    /**
     * @param integer $Status 图片上传状态，0 表示成功，其他表示失败。
10101: url 解码失败。
10102: url 解析失败。
10103: url 不是 cos 地址。
10301: label 不合法。
20101: 数据入库错误。
30101: cos 下载图片连接错误。
30102: cos 下载图片响应错误。
40101: 优图接口调用错误。
     * @param string $ImageId 上传的图片 Id。
     * @param string $Index 图片上传顺序索引。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
